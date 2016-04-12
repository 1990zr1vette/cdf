<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \App\Models\BrandProduct;
use \App\Models\Product;

class Brand extends Model 
{

	protected $fillable = array('brand', 'about', 'about_fr', 'image', 'website', 'active');

    public function BrandProducts()
    {
        return $this->hasMany('\App\Models\BrandProduct');
    }
	
    public function BrandInventoryItems()
    {
        return $this->hasMany('\App\Models\Inventory');
    }	
	
	public static function getBrandsAndProducts()
	{
		$brands = Brand::where('active', 1)->get();
		
		foreach($brands as &$brand)
		{
			$brand['products'] = BrandProduct::where('brand_id', $brand->id)
											   ->get()
											   ->toArray();
											   
			//foreach($brand['products'] as &$product)
			//{
				//$product['product'] = Product::find($product['id']);
			//}
		}
		
		return $brands;
	}
	
}
