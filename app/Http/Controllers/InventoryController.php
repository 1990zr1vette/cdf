<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;
use \App\Models\Product;
use \App\Models\BrandProduct;
use \App\Models\Type;
use \App\Models\Inventory;

use Input;

use Session;

class InventoryController extends Controller {

	private $model = 'Inventory';
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($brand_id, $product_id)
	{
		$InventoryItems = Inventory::where('brand_id', $brand_id)
								->where('product_id', $product_id)
								->get();
		
		return view('admin/inventory/inventory')
			->with('Brand',Brand::find($brand_id))
			->with('Product',Product::find($product_id))			
			->with('InventoryItems',$InventoryItems);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($brand_id, $product_id)
	{
		$brand = Brand::find($brand_id);
		$product = Product::find($product_id);
		$types = Type::where('product_id', $product_id)->get();
		
		return view('admin/inventory/addinventory')
			->with('product',$product)
			->with('brand',$brand)
			->with('types',$types);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$redirect = str_replace('/create', '', $_SERVER['HTTP_REFERER']);		
		return $this->newRecord($this->model, $request, true, $redirect);
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
	public function edit($brand_id, $product_id, $id)
	{
		return view('admin/inventory/inventory_item')->with('Item',Inventory::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $brand_id, $product_id, $id)
	{
		$redirect = str_replace('/edit', '', $_SERVER['HTTP_REFERER']);
		$redirect = substr($redirect, 0, strrpos($redirect, '/'));
		return $this->updateRecord($this->model, $request, $id, $redirect);
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
	
	// ************** GET INVENTORY BY PRODUCT ID (BRAND OPTIONAL) *************** //
	public function products($product, $product_id, $brand = null, $brand_id = null)
	{
		Session::put('lang','EN');
		return $this->productsBlade($product, $product_id, $brand, $brand_id);
	}
	
	public function produits($product, $product_id, $brand = null, $brand_id = null)
	{
		Session::put('lang','FR');
		return $this->productsBlade($product, $product_id, $brand, $brand_id);
	}
	
	public function productsBlade($product, $product_id, $brand, $brand_id)
	{ 
		$Product = Product::findOrFail($product_id);
		
		$ProductBrands = BrandProduct::with('Brand')
			->where('product_id', $product_id)
			->get();
		
		$InventoryItems = Inventory::getInventoryItemsByProductId($product_id, $brand_id);
			
		$url_ol = languages(PRODUCTS_FR, PRODUCTS) . '/' .  
		          fixSegment($Product->product_fr, $Product->product) . '/' .
				  $Product->id;

		$brandurl = languages(PRODUCTS, PRODUCTS_FR) . '/' .
			        fixSegment($Product->product, $Product->product_fr) . '/' .
					$product_id . '/' . 
					languages('brand/', 'marque/');
		
		return view('inventory/inventory')		
			->with('title', languages($Product->product, $Product->product_fr))		
			->with('description', $Product->description)
			->with('keywords', $Product->keywords)
			->with('urlol', $url_ol)
			->with('brandurl', $brandurl)
			->with('Product', $Product)
			->with('ProductBrands', $ProductBrands)
			->with('InventoryItems', $InventoryItems);
	}
	// ******************** GET INVENTORY BY PRODUCT ID ******************** //

	// ******************** GET INVENTORY BY PRODUCT AND TYPE ID ******************** //
	public function typesen($product_name, $type_name, $product_id, $type_id, $brand = null, $brand_id = null)
	{
		Session::put('lang','EN');
		return $this->typesBlade($product_name, $type_name, $product_id, $type_id, $brand, $brand_id);
	}
	
	public function typesfr($product_name, $type_name, $product_id, $type_id, $brand = null, $brand_id = null)
	{
		Session::put('lang','FR');
		return $this->typesBlade($product_name, $type_name, $product_id, $type_id, $brand, $brand_id);
	}
	
	public function typesBlade($product_name, $type_name, $product_id, $type_id, $brand, $brand_id)
	{
		$Product = Product::findOrFail($product_id);
		
		$Type = Type::findOrFail($type_id);
		
		$ProductBrands = BrandProduct::with('Brand')
			->where('product_id', $product_id)
			->get();
		
		$InventoryItems = Inventory::getInventoryItemsByProductAndTypeId($product_id, $type_id, $brand_id);
			
		$url_ol = languages('produits/', 'products/') . 
				  fixSegment($Product->product_fr, $Product->product)  . '/' .
				  fixSegment($Type->type_fr, $Type->type) . '/' . 
				  $Product->id  . '/' .
				  $Type->id;
		
		$brandurl = languages(PRODUCTS, PRODUCTS_FR) . '/' .
			        fixSegment($Product->product, $Product->product_fr) . '/' .
					fixSegment($Type->type, $Type->type_fr) . '/' .
					$product_id . '/' .
					$type_id . '/' .
					languages('brand/', 'marque/');
			
		return view('inventory/inventory')
			->with('title', languages($Product->product . ' ' . $Type->type, $Product->product_fr . ' ' . $Type->type_fr))		
			->with('description',$Product->description)
			->with('keywords',$Product->keywords)
			->with('urlol', $url_ol)	
			->with('brandurl', $brandurl)			
			->with('Product',$Product)
			->with('Type',$Type)
			->with('ProductBrands', $ProductBrands)
			->with('InventoryItems', $InventoryItems);
	}
	// ******************** GET INVENTORY BY PRODUCT AND TYPE ID ******************** //

}
