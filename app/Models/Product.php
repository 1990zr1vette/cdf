<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \App\Models\Type;

class Product extends Model 
{

	protected $fillable = array('product', 'product_fr', 'keywords', 'keywords_fr', 'description', 'description_fr', 'active');
	
    public function ProductBrands()
    {
        return $this->hasMany('\App\Models\BrandProduct');
    }
	
    public function ProductTypes()
    {
        return $this->hasMany('\App\Models\Type');
    }	
	
	public static function getProducts()
	{
		$products = Product::all();
		
		foreach ($products as &$product)
		{
			$product['types'] = Type::where('product_id',$product['id'])->get();
		}
		
		return $products;
	}
}
