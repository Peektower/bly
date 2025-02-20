<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $carts = Cart::content();
        $cartQty = Cart::count() ?? 0;
        $cartSubTotal = Cart::subTotal();
        $cartTotal = Cart::total();

        $data['carts'] = $carts;
        $data['cartQty'] = $cartQty;
        $data['subTotal'] = $cartSubTotal;
        $data['cartTotal'] = $cartTotal;
        $data['user'] = auth()->user();

        return view('pages.front.shop.checkout.checkout1', $data);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $order = new Order();
        $order->order_number = uniqid('OrderNumber-');

        $total = Cart::total();
        $value = str_replace(',', '', $total);
        $order->grand_total = $value;
        $order->item_count = Cart::count();
        $order->user_id = $user->id;
        $order->payment_method = 'paypal';

        $order->shipping_address = $user->shipping_address;
        $order->shipping_city = $user->shipping_city;
        $order->shipping_zipcode = $user->shipping_zipcode;
        $order->shipping_phone = $user->shipping_phone;
        $order->notes = 'This is an order';
        $order->save();

        $this->createOrderItems($order);

        Cart::destroy();
        return redirect()->route('checkout.success');

    }

    public function success()
    {
        $user = auth()->user();
        $data['order'] = $user->orders->first();
        return view('pages.front.shop.checkout.success', $data);
    }

    private function createOrderItems(Order $order)
    {
        $cartItems = Cart::content();

        foreach ($cartItems as $cartItem) {
            $product = Product::find($cartItem->id);
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'qty' => $cartItem->qty,
                'price' => $product->price,
            ]);
        }
    }
}
