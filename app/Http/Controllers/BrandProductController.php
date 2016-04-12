<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;
use \App\Models\BrandProduct;
use \App\Models\Product;

use DB;

class BrandProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($brand_id)
	{
		$brand = Brand::where('id', $brand_id)->first()->toArray();
		
		$brand_products = BrandProduct::where('brand_id', $brand_id)
			->get()
			->toArray();
		
		foreach($brand_products as &$brand_product)
		{
			$brand_product['product'] = Product::where('id', $brand_product['product_id'])
				->select('id', 'product')
				->first()
				->toArray();
		}
		
		return view('admin/brandproducts/brandproducts')
			->with('referer', $_SERVER['HTTP_REFERER'])
			->with('brand', Brand::where('id', $brand_id)->first())
			->with('brand_products', $brand_products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($brand_id)
	{
		return view('admin/brandproducts/addbrandproduct')
			->with('referer', $_SERVER['HTTP_REFERER'])
			->with('brand', Brand::where('id', $brand_id)->first())
			->with('Products', Product::nonBrandProducts($brand_id));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		BrandProduct::create($request->all());
		return redirect('admin/brands/' . $request->get('brand_id') . '/products');
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		BrandProduct::destroy($id);
		return redirect($_SERVER['HTTP_REFERER']);
	}

}
