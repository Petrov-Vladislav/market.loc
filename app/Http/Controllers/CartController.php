<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;
use App\Models\Cart;
use App\Models\Noutbook;
use App\Models\Monoblok;
use App\Models\Naushniki;

class CartController extends Controller
{
    public function cart(Request $request) {
        if ($request->input('hid_smartphone')) {
            $elem = Smartphone::where('id', $request->input('hid_smartphone'))->first();    
        }

        if ($request->input('hid_noutbook')) {
            $elem = Noutbook::where('id', $request->input('hid_noutbook'))->first();
        }

        if ($request->input('hid_monoblok')) {
            $elem = Monoblok::where('id', $request->input('hid_monoblok'))->first();
        }

        if ($request->input('hid_naushniki')) {
            $elem = Naushniki::where('id', $request->input('hid_naushniki'))->first();
        }
        
        
        $cart = new Cart;
        
        if (!$request->session()->has('user')) {
            $request->session()->put('user', uniqid());
        }
        $user = $request->session()->get('user');
        
        $len = mb_strlen($elem->price);
        $sum_str = substr($elem->price, 0, ($len - 3));
        $sum_int = str_replace(' ', '', $sum_str);

        $cart->user_id = $user;
        $cart->name = $elem->name;
        $cart->img = $elem->img;
        $cart->price = $sum_int;    
        $cart->save();
        
        $count_cart = Cart::where('user_id', $user)->count();
        $request->session()->put('count_prod', $count_cart);

        if ($request->input('hid_smartphone')) {
            return redirect()->route('products');
        }

        if ($request->input('hid_noutbook')) {
            return redirect()->route('noutbooks');
        }

        if ($request->input('hid_monoblok')) {
            return redirect()->route('monobloks');
        }

        if ($request->input('hid_naushniki')) {
            return redirect()->route('naushniki');
        }
 
    }
    
    public function cart_user(Request $request) {   
        $cart_user_id = Cart::all();
        $user = false;
        foreach ($cart_user_id as $user_cart) {
            if ($user_cart->user_id == $request->session()->get('user')) {
                $user = $user_cart->user_id;
            }
        }
  
        $carts = Cart::where('user_id', $user)->get();
        
        $cart_sum = 0;
        foreach ($carts as $elem) {
           $cart_sum += $elem->price;
        }

        return view('site.cart', ['carts' => $carts, 'user' => $user, 'cart_sum' => $cart_sum]);
    }

    public function delete_cart(Request $request) {
        $del_cart = Cart::where('id', $request->input('del_prod'))->delete();

        $user = $request->session()->get('user');
        $count_cart = Cart::where('user_id', $user)->count();
        $request->session()->put('count_prod', $count_cart);
        return redirect()->route('cart');
    }
}
