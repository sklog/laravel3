<?php namespace App\Http\Controllers;
use View;
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
	}
}
