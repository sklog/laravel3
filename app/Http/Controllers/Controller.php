<?php namespace App\Http\Controllers;
use View;
use DB;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
    public $styles = array("/css/app.css");
	public function __construct()
	{
		View::composer('app',function ($view)
		{
			$view->with('styles',$this->styles);
		});
		View::composer('home',function ($view)
		{
				$tovars = DB::table('products')
				->where('vip','=',1)
				->paginate(2);
			$view->with('tovars',$tovars);
		});
	}
}
