<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
