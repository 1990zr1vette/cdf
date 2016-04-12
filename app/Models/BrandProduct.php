<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model {
	protected $fillable = array('brand_id', 'product_id');
	
    public function Brand()
    {
        return $this->belongsTo('\App\Models\Brand');
    }
	
	public function Product()
    {
        return $this->belongsTo('\App\Models\Product');
    }	
}
