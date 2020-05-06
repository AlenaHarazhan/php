<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Order;
use Auth;
class HomeController extends Controller
{
/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
$this->middleware('auth');
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function index()
{
return view('home');
}
public function postIndex(OrderRequest $r){
$r['user_id']=Auth::user()->id;
$r['status']='new';
$r['showhide']=1;
$pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
Order::create($r->all());
return redirect()->back();
}
}
