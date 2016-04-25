<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Product;
use \App\Models\Brand;
use \App\Models\BrandProduct;
use \App\Models\Inventory;

use Input;

use Session;

class BrandController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/brands/brands')
			->with('brands',Brand::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/brands/addbrand');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		return $this->newRecord('Brand', $request, true, ADMIN . 'brands');
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
		return view('admin/brands/brand')
			->with('Brand', Brand::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		return $this->updateRecord('Brand', $request, $id, ADMIN . 'brands');
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
	
	// ********** ALL BRANDS ********** //
	public function brands()
	{
		Session::put('lang','EN');
		return $this->brandsBlade();
	}
	
	public function marques()
	{
		Session::put('lang','FR');
		return $this->brandsBlade();
	}
	
	public function brandsBlade()
	{
		return view('brands/brands')
			->with('title', languages(BRANDS, BRANDS_FR))
			->with('description','')
			->with('keywords','')
			->with('urlol', languages(BRANDS_FR, BRANDS));
	}
	// ********** ALL BRANDS ********** //

	// ********** BRAND ********** //
	public function brand($brand_name, $id)
	{
		Session::put('lang','EN');
		return $this->brandBlade($brand_name, $id);
	}
	
	public function marque($brand_name, $id)
	{
		Session::put('lang','FR');
		return $this->brandBlade($brand_name, $id);
	}	
	
	private function brandBlade($brand_name, $id)
	{
		$Brand = Brand::find($id);
		$BrandProducts = BrandProduct::where('active',1)
			->where('brand_id', $id)
			->get();

		$title = languages(BRANDS, BRANDS_FR) . ' ' . $Brand->brand;
			
		$urlol = languages(BRANDS_FR,BRANDS) . '/' . 
			fixSegment($Brand->brand) . '/' . 
			$Brand->id;
							
		return view('brands/brand')
			->with('title', $title)
			->with('description', $Brand->description)
			->with('keywords', $Brand->keywords)
			->with('urlol', $urlol)
			->with('Brand', $Brand)
			->with('BrandProducts', $BrandProducts);		
	}	
	// ********** BRAND ********** //

	
	// ********** BRAND AND PRODUCT ********** //
	public function brandProductEn($brand_name, $product_name, $brand_id, $product_id)
	{		
		Session::put('lang','EN');
		return $this->brandProductBlade($brand_id, $product_id);
	}
	
	public function brandProductFr($brand_name, $product_name, $brand_id, $product_id)
	{
		Session::put('lang','FR');
		return $this->brandProductBlade($brand_id, $product_id);
	}
	
	public function brandProductBlade($brand_id, $product_id)
	{
		$Brand = Brand::find($brand_id);
		$Product = Product::find($product_id);
			
		$InventoryItems = Inventory::with('Product')
			->where('brand_id', $brand_id)
			->where('product_id',$product_id)
			->get();
			
		$urlol = languages(BRANDS_FR, BRANDS) . '/' . 
			fixSegment($Brand->brand) . '/' . 
			fixSegment($Product->product_fr,$Product->product) . '/' . 
			$Brand->id . '/' .
			$Product->id;
		
		return view('brands/brand_product')
			->with('title', languages(BRANDS, BRANDS_FR))
			->with('description', $Product->description)
			->with('keywords', $Product->keywords)
			->with('urlol', $urlol)
			->with('Brand', $Brand)
			->with('Product', $Product)
			->with('InventoryItems', $InventoryItems);
	}	
	// ********** BRAND AND PRODUCT ********** //

}
