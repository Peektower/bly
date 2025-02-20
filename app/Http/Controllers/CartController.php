<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $cart = Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 1,
            'options' => [
                'image' => $product->proImg,
                'category' => $product->category->name
            ]
        ]);


    }

    public function removeItem(Request $request)
    {
        $rowId =  $request->id;
        Cart::remove($rowId);
    }

    public function getCart()
    {
        $carts = Cart::content();
        $cartQty = Cart::count() ?? 0;
        $cartSubTotal = Cart::subTotal();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'subTotal' => $cartSubTotal,
            'cartTotal' => $cartTotal
        ));
    }

    public function itemIncrease(Request $request)
    {
        $rowId =  $request->id;
        $qty = $request->quantity;
        $qty++;
        Cart::update($rowId, ['qty' => $qty]);

    }

    public function itemDecrease(Request $request)
    {
        $rowId =  $request->id;
        $qty = $request->quantity;
        $qty--;
        Cart::update($rowId, ['qty' => $qty]);
    }

    public function emptyCart()
    {
        Cart::destroy();
    }

//    public function cart()
//    {
//        return view('pages.home.pharmacy.shopping.cart');
//    }
}
