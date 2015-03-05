<?php namespace App\Http\Controllers;
	  use DB;
class BaseController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$tovars = DB::table('products')
					->where('vip','=',1)
					->paginate(2);
					
		return view('home');
	}
	
	public function AddProducts()
	{
		DB::table('products')
			->insert(array(  'name'=>'пылесос4',
							 'body'=>'model b45-15',
							 'price'=>'$48',
							 'showhide'=>'show',
							 'vip'=>'1',
							 'cat_id'=>'26',
							 'created_at'=>date('y-m-d h:i:s'),
							 'updated_at'=>date('y-m-d h:i:s')
			));
					 return redirect('/');
			
	}
}
