<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function viewOder(){

        $displayOrder = new Order();

    	return view('order-details',['customers'=>$displayOrder->getOrders()]);
    }

    public function orderByCustomer($id){
        

        $displayResult = new Order();
        
        $result = $displayResult->getData('customerId','=',$id);
        $customerName = $displayResult->getCustomerName($id);

        return view('customer-order',compact('customerName','result'));
    }
}
