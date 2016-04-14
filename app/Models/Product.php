<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Type;

class Product extends Model {
	
	protected $fillable = array('product', 'product_fr', 'keywords', 'keywords_fr', 'description', 'description_fr', 'active');
	
	public $href;
	
    public function ProductBrands()
    {
        return $this->hasMany('\App\Models\BrandProduct');
    }
	
    public function Types()
    {
        return $this->hasMany('\App\Models\Type');
    }
	
    public function ProductTypes()
    {
        return $this->hasMany('\App\Models\Type');
    }
	
	public static function getProducts()
	{
		$Products = Product::with('Types')->where('active',1)->get();
		
		foreach($Products as &$Product)
		{
			$Product->href = languages(PRODUCTS, PRODUCTS_FR) . 
							 '/' . 
						     fixSegment($Product->product, $Product->product_fr) . 
							  '/' .
							 $Product->id;
							 
			foreach ($Product->Types as &$Type)
			{
				$Type->href = languages(PRODUCTS, PRODUCTS_FR) . '/' . 
				              fixSegment($Product->product, $Product->product_fr) . '/' . 
							  fixSegment($Type->type, $Type->type_fr) . '/' . 
							  $Product->id . '/' . 
							  $Type->id;
			}
		}
		
		return $Products;
	}
	
	public static function nonBrandProducts($brand_id)
	{
		$sql = "SELECT products.* FROM products ";
		$sql .= "LEFT JOIN brand_products ";
		$sql .= "ON products.id=brand_products.product_id ";
		$sql .= "AND brand_products.brand_id=" . $brand_id . " "; 
		$sql .= "WHERE brand_products.id IS NULL";

		return \DB::select($sql);
	}	
}
