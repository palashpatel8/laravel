<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function viewOder(){

        $activeCustomer = Order::select('order.*','customer.name')
                        ->selectRaw('DATEDIFF(now(), order.createdDateTime) as datediff')
                        ->selectRaw('sum(order.orderTotal) as totalamnt')
                        ->selectRaw('count(order.customerId) as customerOrders')
                        ->join('customer','customer.customerId', '=' ,'order.customerId')
                        ->where('customer.customerStatusId', '=', 1)
                        ->groupBy('order.customerId')
                        ->orderBy('customer.name','ASC')->get();
        
    	return view('order-details',['customers'=>$activeCustomer]);
    }
}
