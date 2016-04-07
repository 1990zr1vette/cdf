<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;
use \App\Models\BrandProduct;

use \App\Models\Product;
use \App\Models\Type;

class TestController extends Controller 
{

	public function index()
	{
		$Brandproduct = Brandproduct::find(1);

		echo '<b><u>BRAND PRODUCT</u></b><br>';
		echo 'ID=>' . $Brandproduct->id . '<br>';
		echo 'BRAND ID=>' . $Brandproduct->brand_id . '<br>';
		echo 'PRODUCT ID=>' . $Brandproduct->product_id . '<br>';
		
		echo '<br>';
		
		echo 'BRAND=>' . $Brandproduct->brand->brand . '<br>';
		echo 'BRAND=>' . $Brandproduct->product->product . '<br>';
		echo '<br>==================================================<br><br>';
		
		$Brand = Brand::find(2);
		echo '<b><u>BRAND</u></b><br>';
		echo 'ID=>' . $Brand->id . '<br>';
		echo 'BRAND=>' . $Brand->brand . '<br>';
		foreach($Brand->BrandProducts as $BrandProduct)
		{
			//echo 'BRAND=>' . $BrandProduct->brand->brand . '<br>';
			echo 'PRODUCT=>' . $BrandProduct->Product->product . '<br>';
		}
		
	}
	
	// ****************************** BRANDS ****************************** //
	public function brands()
	{
		// ********** BRAND EAGER LOADING ********** //
		$Brand = Brand::where('id', 2)->firstOrFail();
		$BrandProducts = BrandProduct::with('Product')->where('brand_id', 2)->get();
		
		echo '<u><b>' . $Brand->brand  . '</b></u><br>';
		
		foreach ($BrandProducts as $BrandProduct)
		{
			echo $BrandProduct->Product->product . '<br />';
		}
		// ********** BRAND EAGER LOADING ********** //
		
		echo '<br>**********<br><br>';
		
		// ********** BRAND EAGER LOADING ********** //
		$Product = Product::where('id', 5)->firstOrFail();
		$ProductBrands = BrandProduct::with('Brand')->where('product_id', 5)->get();
		
		echo '<u><b>' . $Product->product  . '</b></u><br>';
		
		echo 'COUNT:' . count($ProductBrands) . '<br>';
		foreach ($ProductBrands as $ProductBrand)
		{
			echo $ProductBrand->Brand->brand . '<br />';
		}
		// ********** BRAND EAGER LOADING ********** //		
		
		//$Brand = Brand::with('BrandProducts', 'Product')->where('id', 2)->firstOrFail();
		
		//echo '<br>';
		
		//echo $Brand->brand  . '<br>';
		
		
		//foreach ($Brand->BrandProducts as $BrandProduct)
		//{
			//echo $BrandProduct->brand_id . ' ' . $BrandProduct->product_id . '<br>';
		//}
		
		/*
		foreach(Brand::where('active',1)->get() as $Brand)
		{
			echo '<b><u>' . $Brand->brand . '</u></b><br>';
			
			foreach($Brand->BrandProducts as $BrandProduct)
			{
				echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $BrandProduct->Product->product . '<br>';
				
				foreach($Brand->BrandInventoryItems()->where('product_id', $BrandProduct->Product->id)->get() as $Item)
				{
					echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					echo $Item->model . '<br />';
				}
			}
			
			echo '<br>';
		}
		*/
	}
	// ****************************** BRANDS ****************************** //
	
	public function products()
	{
		
		//$Product = Product::find(2);
		
		//foreach(Product::where('active',1)->get() as $Product)
		//{
			//echo '<b><u>' . $Product->product . '</u></b><br>';	
			
			//foreach($Product->ProductTypes as $Type)
			//{
				//echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $Type->id . ' ' . $Type->type . '<br>';
				
				//foreach($Type->InventoryItems as $Item)
				//{
					//echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					//echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					//echo $Item->model . '<br>';
				//}
				
			//}
			
			//echo '<br>';
			
		//}
		
		
	}	

}
