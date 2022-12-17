<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Mail;
use Session;
use Cart;

class CheckoutController extends Controller
{
    public function index(){
    	return view('front-end.checkout.checkout-content');
    }

    public function customerSignUp(Request $request){
        $request->validate([
            'email_address' => 'required|email|unique:customers,email_address',
        ]);
        //dd($request->all());
    	$customer = new Customer();
    	$customer->first_name = $request->first_name;
    	$customer->last_name = $request->last_name;
    	$customer->email_address = $request->email_address;
    	$customer->password = bcrypt($request->password);
    	$customer->phone_number = $request->phone_number;
        $customer->address = $request->address;

        $data = $customer->toArray();
        // echo "<pre>";
        // print_r($data);
        // exit();
    	Mail::send('front-end.mails.confirmation-mail',$data, function($message) use ($data){
    		$message->to($data['email_address']);
    		$message->subject('Confirmation Mail');
        });

        $customer->save();

    	$customerId = $customer->id;
    	Session::put('customerId',$customerId);
    	Session::put('customerName',$customer->first_name.' '.$customer->last_name);
        return redirect()->route('checkout-shipping');
    	//return redirect('/checkout/shipping');
    }

    public function customerLoginCheck(Request $request){
        $customer = Customer::where('email_address', $request->email_address)->first();
        if (isset($customer) && password_verify($request->password, $customer->password) ) {
        Session::put('customerId',$customer->id);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);
        return redirect()->route('checkout-shipping');
        //return redirect('/checkout/shipping');
        } else {
            Session::flash('invalid_email','Please, Enter valid Email Address or Password.');
            return redirect()->route('checkout');
            //return redirect('/checkout')->with('message','Please, Enter valid Email Address or Password.');
        }        
    }

    public function newCustomerLogin(){
        return view('front-end.customer.customer-login');
    }

    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return redirect('/');
    }

    public function shippingForm(){
    	$customer = Customer::find(Session::get('customerId'));
    	return view('front-end.checkout.shipping',[
    		'customer' => $customer
    	]);
    }

    public function saveShippingInfo(Request $request){
    	$shipping = new Shipping();
    	$shipping->full_name = $request->full_name; 
    	$shipping->email_address = $request->email_address; 
    	$shipping->phone_number = $request->phone_number; 
    	$shipping->address = $request->address;
    	$shipping->save(); 

        Session::put('shippingId',$shipping->id);
        return redirect()->route('checkout-payment');
    	// return redirect('/checkout/payment'); 
    }

    public function paymentForm()
    {
    	return view('front-end.checkout.payment');
    }

    public function newOrder(Request $request){
        $paymentType = $request->payment_type;
        if ($paymentType=='Cash') { 
            $order = new Order();
            $order->customer_id  = Session::get('customerId');
            $order->shipping_id  = Session::get('shippingId');
            $order->order_total = Session::get('orderTotal');
            $order->save();

            $payment = new Payment();
            $payment->order_id  = $order->id;
            $payment->payment_type  = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id  = $order->id;
                $orderDetail->product_id  = $cartProduct->id;
                $orderDetail->product_name  = $cartProduct->name;
                $orderDetail->product_price  = $cartProduct->price;
                $orderDetail->product_quantity  = $cartProduct->qty;
                $orderDetail->save();
            }
            Cart::destroy();
            return redirect()->route('complete-order');
            //return redirect('/complete/order');

        }else if($paymentType=='Stripe'){
            
            return view('cardForm');

        }
        else if($paymentType=='Bkash'){
            return redirect('/example1');
        }
        
    }

    public function stripePayment(Request $request){
        $customer = Customer::find(Session::get('customerId'));
        $order = new Order();
        $order->customer_id  = Session::get('customerId');
        $order->shipping_id  = Session::get('shippingId');
        $order->order_total = Session::get('orderTotal');
        $order->save();

        $payment = new Payment();
        $payment->order_id = $order->id;
        $payment->payment_type  = 'Stripe';
        $payment->save();

        $cartProducts = Cart::content();
        foreach ($cartProducts as $cartProduct) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id  = $order->id;
            $orderDetail->product_id  = $cartProduct->id;
            $orderDetail->product_name  = $cartProduct->name;
            $orderDetail->product_price  = $cartProduct->price;
            $orderDetail->product_quantity  = $cartProduct->qty;
            $orderDetail->save();
        }
        Cart::destroy();

        // Stripe Process

        \Stripe\Stripe::setApiKey('sk_test_51IyHqaBTGpLS02saT35DzKHxN5NauyOhB7cde8vSuHS8pHTYxH2TbtygIXVTTMSoK9ON5qLzTiRbfBKUj63nyezK00jleGAPxH');
        $customer = \Stripe\Customer::create(array(
            'name' => $customer->first_name.' '.$customer->last_name,
            'description' => 'Test description',
            'email' => $customer->email_address,
            'source' => $request->input('stripeToken'),
            "address" => ["city" => "Chittagong", "country" => "BD", "line1" => "510 Townsend St", "postal_code" => "4000", "state" => "CTG"]

        ));
        try {
            \Stripe\Charge::create( array (
                    "amount" => Session::get('orderTotal') * 100,
                    "currency" => "bdt",
                    "customer" =>  $customer["id"],
                    "description" => "Test payment."
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return view('front-end.payment.success');
        } catch ( \Stripe\Error\Card $e ) {
            Session::flash ( 'fail-message', $e->get_message());
            return 'Stripe failed';
            
        }
    }

    public function completeOrder()
    {
    	return 'Success';
    }

    public function ajaxEmailcheck($email){
        $customer = Customer::where('email_address',$email)->first();
        if ($customer) {
            echo "<span style='color:red'>Already Exists!!!</span>";
        }else{
            echo "<span style='color:green'>Available</span>";
        }
    }
}
