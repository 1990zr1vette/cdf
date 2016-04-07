<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Product;
use \App\Models\Type;

use Session;
use Input;

class ProductController extends Controller {

	//protected $request;

	//public function __construct(Request $request)
	//{
		//$this->middleware('auth');
		//$this->request = $request;
	//}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/products/products')
		       ->with('products',Product::all());		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/products/addproduct');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if (Product::create($request->all()))
			echo '1';
		else
			echo '0';		
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
	public function edit($id)
	{
		return view('admin/products/product')
			->with('product',Product::findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Product::findOrFail($id);		 
		echo $product->fill(Input::all())->save(); 
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
	
	// ******************** GET PRODUCTS BY PRODUCT ID ******************** //
	public function products($product, $id)
	{
		Session::put('lang','EN');
		return $this->productsBlade($id);
	}
	
	public function produits($product, $id)
	{
		Session::put('lang','FR');
		return $this->productsBlade($id);
	}
	
	public function productsBlade($id)
	{
		$Product = Product::findOrFail($id);
		
		$url_ol = languages('produits/' . 
		                    fixSegment($Product->product_fr) . '/' .
							$Product->id, 
							'products/' . 
							fixSegment($Product->product) . '/' .
							$Product->id);
		
		return view('products/products')
			->with('Product',$Product)
			->with('description',$Product->description)
			->with('keywords',$Product->keywords)
			->with('urlol', $url_ol);
			
	}
	// ******************** GET PRODUCTS BY PRODUCT ID ******************** //

	public function entypes($product_name, $type_name, $product_id, $type_id)
	{
		Session::put('lang','EN');
		return $this->typesBlade($product_name, $type_name, $product_id, $type_id);
	}
	
	public function frtypes($product_name, $type_name, $product_id, $type_id)
	{
		Session::put('lang','FR');
		return $this->typesBlade($product_name, $type_name, $product_id, $type_id);
	}
	
	public function typesBlade($product_name, $type_name, $product_id, $type_id)
	{
		$Product = Product::findOrFail($product_id);
		$Type = Type::findOrFail($type_id);
		
		$url_ol = languages('produits/', 'products/') . 
				  fixSegment($Product->product_fr, $Product->product)  . '/' .
				  fixSegment($Type->type_fr, $Type->type) . '/' . 
				  $Product->id  . '/' .
				  $Type->id;
				  
		return view('products/types')
			->with('description',$Product->description)
			->with('keywords',$Product->keywords)
			->with('urlol', $url_ol)		
			->with('Product',$Product)
			->with('Type',$Type);
	}
	
	
	

}
