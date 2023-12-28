<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Session;
use ShoppingCart;

class CheckoutController extends Controller
{
    private $customer, $order, $orderDetail, $email;

    public function index()
    {
        if(Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->customer = '';
        }
        return view('website.checkout.index',['customer' => $this->customer]);
    }
    public function checkCustomerEmail()
    {
        $this->email = $_GET['email'];
        $this->customer = Customer::where('email',$this->email)->frist();
        if($this->customer)
        {
            return response()->json([
                'success' => false,
                'message' => "Email Address Already Exist"
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => "Email Address Available"
        ]);

        return response()->json($this->email);
    }

    private function orderCustomerValidate($request)
    {
        // $this->validate($request,[
        //     'name'             => 'required',
        //     'email'            => 'required|unique:customer,email',
        //     'mobile'           => 'required|unique:customer,mobile',
        //     'delivery_address' => 'required',
        // ]);
    }

    public function newCashOrder(Request $request)
    {
        if(Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->orderCustomerValidate($request);
            $this->customer = Customer::newCustomer($request);
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        $this->order = Order::newOrder($request, $this->customer->id);
        OrderDetail::newOrderDetail($this->order->id);
        return redirect('/home')->with('notification','Congratulation ... Your order info post successfully. Please wait, we will contact with you soon.');


    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
