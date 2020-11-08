<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = "customer";


    public function getcount($id){
        
        $result = Order::selectRaw('sum(orderTotal) as totalamnt')
                        ->where('customerId','=',$id)
                        ->where('orderStatus','=','Complete')
                        ->get();

        if ($result[0]->totalamnt != '')
        {
            return $result[0]->totalamnt;
        }
        else{
            return 0;
        }
    }
}
