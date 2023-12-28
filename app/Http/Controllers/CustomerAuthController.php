<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;

    public function index()
    {
        return view('customer.index');
    }


    public function login(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if($this->customer)
        {
            if(password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id',$this->customer->id);
                Session::put('customer_name',$this->customer->name);

                return redirect('customer-dashboard');
            }
            else
            {
                return back()->with('message','Invalid Password');
            }
        }
        else
        {
            return back()->with('message','Invalid Email Address');
        }
    }


    public function register(Request $request)
    {
        // $this->validate($request,[
        //     'name'             => 'required',
        //     'email'            => 'required|unique:customer,email',
        //     'password'         => 'required',
        //     'mobile'           => 'required|unique:customer,mobile',
        // ]);
        $this->customer = Customer::newCustomer($request);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);
        return redirect('/customer-dashboard');
    }



    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function profile()
    {
        return view('customer.profile');
    }


    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }
}
