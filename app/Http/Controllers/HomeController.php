<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
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
        $objs = Product::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('home', compact('objs'));

    }
    public function postIndex(ProductRequest $r){
        $r['picture'] = '';
        $r['user_id'] = Auth::user()->id;
        $r['status'] = 'new';
        $r['showhide'] = 1;
        $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);

        if ($pic) {
            $r['picture'] = $pic;
        }
       // Order::create ($r->all());
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
