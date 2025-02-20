<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.front.home');
    }

    public function shop()
    {
        $data['cat1'] = Category::findOrFail(1);
        $data['cat2'] = Category::findOrFail(2);
        $data['cat3'] = Category::findOrFail(3);
        $data['cat4'] = Category::findOrFail(4);
        $data['cat5'] = Category::findOrFail(5);
        return view('pages.front.shop.index', $data);
    }

    public function categoryShow(Category $category)
    {
        $data['category'] = $category;
        $data['products'] = $category->products()->orderBy('name', 'asc')->get();
        return view('pages.front.shop.category', $data);
    }

    public function product(Product $product)
    {
        $data['product'] = $product;
        return view('pages.front.shop.product', $data);
    }

    public function account()
    {

        $data['user'] = Auth::user() ?? '';
        return view('pages.front.user.index', $data);
    }

    public function wishlist()
    {

        $data['user'] = Auth::user() ?? '';
        return view('pages.front.user.wishlist', $data);
    }

    public function cart()
    {
        $data['user'] = Auth::user() ?? '';
        return view('pages.front.user.cart', $data);
    }

    public function order()
    {

        $data['user'] = $user = Auth::user() ?? '';
        if ($user){
            $data['orders'] = Order::where('user_id', $user->id)->get();
        }
        return view('pages.front.user.order', $data);
    }


}
