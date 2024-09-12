<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://harnishdesign.net/demo/html/koice/images/favicon.png" rel="icon" />
<title>{{ $order->name }} | {{ $order->invoice_no }}</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="https://harnishdesign.net/demo/html/koice/vendor/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://harnishdesign.net/demo/html/koice/vendor/font-awesome/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="https://harnishdesign.net/demo/html/koice/css/stylesheet.css"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Main Content -->
  <main>
	  <div class="table-responsive">
		<table class="table table-bordered border border-secondary mb-0">
			<tbody>
				<tr>
				  <td colspan="2" class="bg-light text-center"><h3 class="mb-0">{{ config('app.name') }}</h3></td>
				</tr>
				<tr>
				  <td colspan="2" class="text-center text-uppercase">{{ $sharedData['web']->address1 }}</td>
				</tr>
				<tr>
				  <td colspan="2" class="py-1">
					<div class="row">
						<div class="col"></div>
						<div class="col text-center fw-600 text-3 text-uppercase">Tax Invoice</div>
						<div class="col text-end"></div>
					</div>
				  </td>
				</tr>
				<tr>
				  <td class="col-6">
					<div class="row gx-2 gy-2">
						<div class="col-auto"></div>
						<div class="col">
							<address>
								<strong>{{ $order->name }}</strong><br />
								{{ $order->mobile }},<br />
								{{ $order->street }}, {{ $order->city }}, {{ $order->state }}, <br>
								{{ $order->pincode }}, {{ $order->country }}
							</address>
						</div>
					</div>
				  </td>
				  <td class="col-6 bg-light">
					<div class="row gx-2 gy-1 fw-600">
						<div class="col-4">Order ID <span class="float-end">:</span></div>
						<div class="col-8">{{ $order->order_id }}</div>

						<div class="col-4">Invoice No <span class="float-end">:</span></div>
						<div class="col-8">{{ $order->invoice_no }}</div>
												
						<div class="col-4">Date <span class="float-end">:</span></div>
						<div class="col-8">{{ $order->created_at->format('d M Y') }}</div>

						<div class="col-4">Payment <span class="float-end">:</span></div>
						<div class="col-8">{{ $order->payment_status }}</div>
					</div>
				  </td>
				</tr>
				<tr>
					<td colspan="2" class="p-0">
						<table class="table table-sm mb-0">
							<thead>
							  <tr class="bg-light">
								<td class="col-1 text-center"><strong>SrNo</strong></td>
								<td class="col-6 "><strong>Product Name</strong></td>
								<td class="col-1 text-center"><strong>Qty</strong></td>
								<td class="col-2 text-end"><strong>Rate</strong></td>
								<td class="col-2 text-end"><strong>Amount</strong></td>
							  </tr>
							</thead>
							<tbody>
                                @foreach ($order->orderItems as $item)                                    
								<tr>
								  <td class="col-1 text-center">{{ $loop->index+1 }}</td>
								  <td class="col-6">{{ $item->product_name }}</td>
								  <td class="col-1 text-center">{{ $item->product_qty }}</td>
								  <td class="col-2 text-end">₹{{ $item->product_price }}</td>
								  <td class="col-2 text-end">₹{{ $item->sub_total }}</td>
								</tr>
                                @endforeach
							</tbody>
						</table>
					</td>
				</tr>
				<tr class="bg-light fw-600">
					<td class="col-7 py-1"></td>
					<td class="col-5 py-1 pe-1">Sub Total: <span class="float-end">₹{{ $order->amount }}</span></td>
				</tr>
				{{-- <tr>
					<td class="col-7 text-1"><span class="fw-600">Bill Amount:</span> <i>Thirty Thousand Forty Four Only</i></td>
					<td class="col-5 pe-1">
						Shipping: <span class="float-end">₹0.00</span><br>
					</td>
				</tr> --}}
				<tr>
					<td class="col-7 text-1">Note : {{ $order->order_notes }}</td>
					<td class="col-5 pe-1 bg-light fw-600">
						Grand Total:<span class="float-end">₹{{ $order->amount }}</span>
					</td>
				</tr>
				<tr>
					<td class="col-7 text-1">
						<div class="fw-600">Terms & Condition :</div>
						<ol>
							<li>Goods once sold will not be taken back.</li>
							<li>Our risk and responsibility ceases as soon</li>
						</ol>
					</td>
					<td class="col-5 pe-1 text-end">
						For, {{ config('app.name') }}
						<div class="text-1 fst-italic mt-5">(Authorised Signatory)</div>
					</td>
				</tr>
			</tbody>
		</table>
		</div>
  </main>
  <footer class="text-center mt-4">
	<div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print & Download</a> </div>
  </footer>
</div>
</body>
</html>