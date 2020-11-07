<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerStatus;

class CustomerStatusController extends Controller
{
    public function addStatus(){

    	return view('status');
    }

    public function createStatus(Request $req){

        $status = new CustomerStatus();
        $status->name = $req->name;
        $status->code = $req->code;
        $status->save();
        return view('status');
    }

    Public function viewStatus(){

        $status = CustomerStatus::all();
        
        return view('view-status',['status'=>$status]);

    }
}
