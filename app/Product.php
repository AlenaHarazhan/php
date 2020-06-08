<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'catalog_id',
        'price',
        'body',
        'picture',
        'user_id',
        'status'];
    public function catalog(){
        return $this->belongsTo('App\Catalog', 'catalog_id', 'id');
    }
}
