<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\FiveLevelBanner;
use App\Models\ForthLevelBanner;
use App\Models\MainBanner;
use App\Models\Pages;
use App\Models\Product;
use App\Models\SecondLevelBanner;
use App\Models\SixLevelBanner;
use App\Models\Subcategory;
use App\Models\SubsubCategory;
use App\Models\ThirdLevelBanner;
use App\Models\YoutubeVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $banners = MainBanner::where(['status' => '1'])->orderBy('sort', 'asc')->get();
        $newArrivals = Product::where(['status' => '1'])->orderBy('created_at', 'asc')->get();
        $bikeBrands = Subcategory::where(['status' => '1','category_id' => '1'])->orderBy('created_at', 'asc')->get();
        $ytVideos = YoutubeVideo::all();
        $scondLvlBnr = SecondLevelBanner::first();
        $thirdLvlBnr = ThirdLevelBanner::first();
        $forthLvlBnr = ForthLevelBanner::first();
        $fiveLvlBnr = FiveLevelBanner::first();
        $sixLvlBnr = SixLevelBanner::first();
        return view('web.index',compact('banners','newArrivals','bikeBrands','ytVideos','scondLvlBnr','thirdLvlBnr','forthLvlBnr','fiveLvlBnr','sixLvlBnr'));
    }

    public function showCart(){
        return view('web.cart');
    }

    public function showCheckout(){
        $carts = Session::get('cart',[]);
        $cartTotal = 0;

        foreach ($carts as $item) {
            $cartTotal += $item['product_price'] * $item['product_qty'];
        }
        return view('web.checkout', compact('carts','cartTotal'));
    }


    public function categorypage($slug){
        $category = Subcategory::where('slug', $slug)->first();
        return view('web.category', compact('category'));
    }
    public function subcategorypage($slug){
        $category = SubsubCategory::where('slug', $slug)->first();
        return view('web.subcategory', compact('category'));
    }

    public function productDetail($slug){
        $product = Product::where('slug', $slug)->first();
        $relatedProduct = Product::where('slug', $slug)->first();
        return view('web.productDetail', compact('product'));
    }

    public function search(Request $request){
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")->where('status', '1')->orderBy('sort','asc')->paginate(9);

        return view('web.search', compact('products','query'));
    }

    public function page($slug){
        $page = Pages::where('slug', $slug)->first();
        return view('web.page', compact('page'));
    }

    public function contact(){
        return view('web.contact');
    }
}
