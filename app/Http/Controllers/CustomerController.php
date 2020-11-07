<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function viewCustomer(){

        $customer = Customer::all();

        return view('view-customer',['customers'=>$customer]);
    }
}
