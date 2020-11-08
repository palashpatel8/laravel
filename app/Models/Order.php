<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";

    public function getCustomerName($id){

        $result = Customer::where('customerId','=',$id)->get();

        return $result[0]->name;
    }

    public function getOrders(){
    
        $displayOrder = Customer::select('customer.*')
                        ->selectRaw('DATEDIFF(now(), Min(order.createdDateTime)) as datediff') 
                        ->selectRaw('count(order.customerId) as customerOrders')                      
                        ->leftjoin('order','order.customerId','=','customer.customerId')
                        ->where('customer.customerId','!=','order.customerId')
                        ->groupBy('customer.customerId')
                        ->orderBy('customer.name','ASC')
                        ->get();
                        
        return $displayOrder;
    
    }

    public function getData($value,$operator,$id){
        $displayResult = Order::where($value,$operator,$id)->get();
        
        return $displayResult;
    }

}
