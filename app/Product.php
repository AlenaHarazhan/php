<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'name',
        'catalog_id',
        'price',
        'body',
        'picture',
        'user_id',
        'status'];
}
