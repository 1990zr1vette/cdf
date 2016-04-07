<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;
use \App\Models\Product;
use \App\Models\Type;
use \App\Models\Inventory;

use Input;

class InventoryController extends Controller {

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
		
		$moveTo = base_path() . '/public/images/';				  
		$imageName = Input::file('image')->getClientOriginalName();
		
		$Inventory = new Inventory(
			array('brand_id' 			=> $request->get('brand_id'), 
				  'product_id' 			=> $request->get('product_id'),
				  'type_id' 			=> $request->get('type_id'),
				  'model' 				=> $request->get('model'),
				  'description' 		=> $request->get('description'),
				  'description_fr' 		=> $request->get('description_fr'),
				  'image' 	 			=> $imageName));
										
		if ($request->file('image')->move($moveTo, $imageName))
		{
			$Inventory->save();
		}
		
		return redirect($redirect);
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
	public function update($brand_id, $product_id, $id)
	{
		$redirect = str_replace('/edit', '', $_SERVER['HTTP_REFERER']);
		$redirect = substr($redirect, 0, strrpos($redirect, '/'));

		$Inventory = Inventory::findOrFail($id);		
		
		if (Input::has('image')) 
		{
			$image = Input::file('image');
			$imageName = $image->getClientOriginalName();
			$moveTo = base_path() . '/public/images/';	
			
			if ($request->file('image')->move($moveTo, $imageName))			
			{
				$Inventory->image = $imageName;
			}
		}
		
		if ($Inventory->fill(Input::all())->save())
		{
			return redirect($redirect);
		}
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
