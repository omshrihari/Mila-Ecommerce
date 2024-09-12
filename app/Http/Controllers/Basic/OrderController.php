<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;

class OrderController extends Controller
{
    public $merchant_id, $order_id, $merchant_user_id, $invoice_no, $merchant_transaction_id, $user_ip, $session_id;

    public function __construct(Request $request)
    {
        $this->merchant_id = 'M1U5VP88JNZQ';
        $this->order_id = 'ORDMA'.date('YmdHis');

        $last_ord = Order::latest();
        if(!$last_ord){
            $last_ord->invoice_no = 0;
        }
        $this->invoice_no = 'INVMA'.date('Ym').$last_ord->invoice_no+1;

        $timestamp = now()->format('YmdHis'); // Format: YearMonthDayHourMinuteSecond
        $uniqueId = uniqid(); // Generate a unique identifier
        $this->merchant_user_id = 'MUID' . $timestamp . $uniqueId;

        $timestamp = now()->format('YmdHis');
        $uniqueId = uniqid();
        $this->merchant_transaction_id = 'MT' . $timestamp . $uniqueId;

        $this->user_ip = $request->ip();
        $this->session_id = session()->getId();
    }

    public function order(Request $request){

        $request->validate([
            'name' => 'required|string|max: 255',
            'country' => 'required|string|max: 255',
            'street1' => 'required',
            'city' => 'required|string|max: 255',
            'state' => 'required|string|max: 255',
            'mobile' => 'required|numeric',
            'pincode' => 'required|numeric',
            'email' => 'required|email|max: 255',
        ]);

        $newAddr = $request->street1.' '.$request->street2;

        $carts = Session::get('cart',[]);
        $cartTotal = 0;

        foreach ($carts as $item) {
            $cartTotal += $item['product_price'] * $item['product_qty'];
        }

        $orderObj = new Order();
        $orderObj->order_id = $this->order_id;
        $orderObj->invoice_no = $this->invoice_no;
        $orderObj->user_ip = $this->user_ip;
        $orderObj->session_id = $this->session_id;
        $orderObj->merchant_user_id = $this->merchant_user_id;
        $orderObj->name = $request->name;
        $orderObj->country = $request->country;
        $orderObj->state = $request->state;
        $orderObj->city = $request->city;
        $orderObj->pincode = $request->pincode;
        $orderObj->street = $newAddr;
        $orderObj->mobile = $request->mobile;
        $orderObj->email = $request->email;
        $orderObj->order_notes = $request->order_notes;
        $orderObj->amount = $cartTotal;
        $orderObj->order_status = 'processing';
        $orderObj->payment_method = 'Online';
        $orderObj->transaction_id = '';
        $orderObj->payment_status = 'Pending';

        if($orderObj->save()){
            foreach($carts as $key => $item){                
                $ordItem = new OrderItem();
                $ordItem->order_id = $orderObj->id;
                $ordItem->product_name = $item['product_name'];
                $ordItem->product_image = $item['product_image'];
                $ordItem->product_price = $item['product_price'];
                $ordItem->product_qty = $item['product_qty'];
                $ordItem->product_unit_price = $item['product_price'];
                $ordItem->sub_total = $item['product_price'] * $item['product_qty'];

                $ordItem->save();
            }

            Session::forget('cart');

        }

        $data = array(
            'merchantId' => $this->merchant_id,
            'merchantTransactionId' => $this->merchant_transaction_id,
            'merchantUserId' => $this->merchant_user_id,
            'amount' => $cartTotal * 100,
            'redirectUrl' => route('response'),
            'redirectMode' => 'POST',
            'callbackUrl' => route('response'),
            'mobileNumber' => $request->mobile,
            'paymentInstrument' =>
            array(
                'type' => 'PAY_PAGE',
            ),
        );

        session(['payment_data' => $data]);
        session(['order_id' => $orderObj->id]);
        return redirect()->route('phonepe');
    }


    public function phonePe()
    {
        $data = session('payment_data');

        $encode = base64_encode(json_encode($data));
        $saltKey = '05d37bdb-1f3a-4347-9176-be9466f5bdac';
        $saltIndex = 1;

        $string = $encode . '/pg/v1/pay' . $saltKey;
        $sha256 = hash('sha256', $string);
        $finalXHeader = $sha256 . '###' . $saltIndex;

        $response = Curl::to('https://api.phonepe.com/apis/hermes/pg/v1/pay')
            ->withHeader('Content-Type: application/json')
            ->withHeader('accept: application/json')
            ->withHeader('X-VERIFY: ' . $finalXHeader)
            ->withData(json_encode(['request' => $encode]))
            ->post();

        $rData = json_decode($response);

        return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);
    }

    public function response(Request $request)
    {
        $input = $request->all();

        $saltKey = '05d37bdb-1f3a-4347-9176-be9466f5bdac';
        $saltIndex = 1;

        $finalXHeader = hash('sha256', '/pg/v1/status/' . $input['merchantId'] . '/' . $input['transactionId'] . $saltKey) . '###' . $saltIndex;

        $response = Curl::to('https://api.phonepe.com/apis/hermes/pg/v1/status/' . $input['merchantId'] . '/' . $input['transactionId'])
            ->withHeader('Content-Type: application/json')
            ->withHeader('accept: application/json')
            ->withHeader('X-VERIFY: ' . $finalXHeader)
            ->withHeader('X-MERCHANT-ID: ' . $input['merchantId'])
            ->get();

        $rData = json_decode($response);

        $lastOrderId = session('order_id');
        if ($rData->code == 'PAYMENT_SUCCESS') {
            $orderlst = Order::find($lastOrderId);
            $orderlst->payment_status = $rData->data->state;
            $orderlst->transaction_id = $rData->data->transactionId;

            dd('success');
            
        } else {

            $orderlst = Order::find($lastOrderId);
            $orderlst->order_status = 'cancelled';
            $orderlst->update();

            dd('failed');

        }
    }
}
