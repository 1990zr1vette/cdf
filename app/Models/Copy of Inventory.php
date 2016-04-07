<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//use \App\Models\Brand;
//use \App\Models\BrandProduct;
//use \App\Models\Product;
//use \App\Models\Inventory;

class Inventory extends Model 
{
	protected $table = 'inventory';
	
	protected $fillable = array('brand_id', 'product_id', 
								'type_id', 'model', 
								'description', 'description_fr',
								'image', 'active');
	
    public function Brand()
    {
        return $this->belongsTo('\App\Models\Brand');
    }
	
	public function Product()
    {
        return $this->belongsTo('\App\Models\Product');
    }
	
	/*
	public static function getBrandProductsInventory()
	{
		$brands = Brand::all();
		
		foreach($brands as &$brand)
		{
			$brand['brand_products'] = BrandProduct::getBrandProducts($brand->id);
			
			foreach($brand['brand_products'] as &$brand_product)
			{
				$brand_product['inventory_items'] = Inventory::where('brand_id', $brand->id)
													 ->where('brand_id', $brand_product->product->product_id)
													 ->get()
													 ->toArray();
			}
			
		}
		
		return $brands;
		
	}
	*/
}
