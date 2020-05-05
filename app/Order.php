<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\OrderRequest;
use App\Order;
use Auth;

class Order extends Model
{
    public $fillable = ['category','name','myname','email','phone'];
}
