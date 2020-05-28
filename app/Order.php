<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     public $fillable = ['category',
     'name',
     'myname',
     'email',
     'phone',
     'picture'];
}
