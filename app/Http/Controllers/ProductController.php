<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;



class ProductController extends Controller
{
public function index()
{
$objs = Product::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
return view('home', compact('objs'));
}
public function postAdd(ProductRequest $r){
$r['user_id'] = Auth::user()->id;
$r['status'] = '';
unset($r['_token']);
$pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
if($pic){
$r['picture'] = $pic;
}
Product::create($r->all());
return redirect()->back();
}

public function getDelete($id=null){
            //Product::where('id', $id)->delete();
            $objs= Product::find($id);
            @unlink(public_path().'/uploads/'.$objs->user_id.'/'.$objs->picture);
            @unlink(public_path().'/uploads/'.$objs->user_id.'/s'.$objs->picture);
            @unlink(public_path().'/uploads/'.$objs->user_id.'/ss'.$objs->picture);
            $objs->delete();
            return redirect('home');
        }
}
