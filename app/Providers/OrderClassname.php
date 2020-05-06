<?php
namespace App\Providers;
use App\Order;
use Illuminate\Support\ServiceProvider;
class OrderClassname extends ServiceProvider
{
	public function boot()
	{
	view()->composer('*', function($view){
	$view->with('category', Order::all());
	});
	}
}