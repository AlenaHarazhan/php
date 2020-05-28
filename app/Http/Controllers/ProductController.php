<?php
namespace App\Http\Controllers;
use Auth;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
public function postAdd(ProductRequest $r){
$r['user_id'] = Auth::user()->id;
$r['status'] = '';
unset($r['_token']);
Product::create($r->all());
return redirect()->back();
}
}
