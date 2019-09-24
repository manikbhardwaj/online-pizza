<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Payments;
use App\User;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        return Menu::all();
    }

    public function saveOrders(Request $request)
    {

        $user = json_decode($request->user);

        $countItemss = count($request->cart['cartItems']);
        if ($countItemss > 1) {
            for ($i = 0; $i < $countItemss; $i++) {

                $order_id = Orders::create(
                    [
                        'user_email' => $user->email,
                        'cart_id' => $request->cart['cartItems'][$i]['id'],
                        'quantity' => $request->cart['cartItems'][$i]['quantity'],
                        'cart_total' => $request->cart['cartTotal'],
                        'order_id' => $request->cart['orderID']
                    ]
                );
            }

        } else {
            $order_id = Orders::create(
                [
                    'user_email' => $user->email,
                    'cart_id' => $request->cart['cartItems'][0]['id'],
                    'quantity' => $request->cart['cartItems'][0]['quantity'],
                    'cart_total' => $request->cart['cartTotal'],
                    'order_id' => $request->cart['orderID']
                ]
            );
        }
        $user_id = User::findorfail($user->id);
        $user_id->address = $request->address;
        $user_id->phone_number = $request->phone_number;
        $user_id->save();
        return $order_id;
    }

    public function paymentSuccess(Request $request)
    {
        $payment_id = Payments::create(
            [
                'order_id' => $request->orderID, 'stripe_token' => $request->stripeToken
            ]
        );
        return $payment_id;
    }
}
