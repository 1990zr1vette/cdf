<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class BrandProduct extends Model 
{
	protected $fillable = array('brand_id', 'product_id');
	
    public function Brand()
    {
        return $this->belongsTo('\App\Models\Brand');
    }
	
	public function Product()
    {
        return $this->belongsTo('\App\Models\Product');
    }
	
    //public function BrandItems()
    //{
    //    return $this->morphMany('App\Models\Inventory', 'brand');
    //}	
	
    //public function ProductItems()
    //{
    //    return $this->morphMany('App\Models\Inventory', 'product');
    //}
	
	public static function getBrandProducts($id)
	{
		$brand_products = BrandProduct::where('brand_id', $id)->get();//->toArray();
		
		foreach($brand_products as &$brand_product)
		{
			$brand_product['product'] = Product::where('id', $brand_product['product_id'])
											->first();
											//->toArray();
		}
		
		return $brand_products;
	}
}
