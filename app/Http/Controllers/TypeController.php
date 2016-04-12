<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Product;
use \App\Models\Type;

use Input;

class TypeController extends Controller 
{

	//public function __construct()
	//{
		//$this->middleware('auth');
	//}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($product_id)
	{
		return view('admin/types/types')
			->with('product',Product::where('id',$product_id)->first())
			->with('types', Type::where('product_id',$product_id)->get());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($product_id)
	{
		return view('admin/types/addtype')
			->with('product',Product::where('id',$product_id)->first())
			->with('referer', $_SERVER['HTTP_REFERER']);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$referer = $_SERVER['HTTP_REFERER'];
		Type::create($request->all());
		return redirect(str_replace('/create', '', $referer));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($product_id, $id)
	{
		return view('admin/types/type')->with('type',Type::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$redirect = str_replace('/' . $id . '/edit', '', $_SERVER['HTTP_REFERER']);

		$type = Type::findOrFail($id);		
		$type->fill(Input::all())->save();
		
		return redirect($redirect);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
