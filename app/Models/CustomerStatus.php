<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerStatus extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "customer_status";

    protected $fillable = ['name', 'code'];
}
