@extends('layout/admin')

@section('main')

			
@foreach($brands as $brand)
			<fieldset>
				<legend align="center">{{ $brand['brand'] }}</legend>
				
@foreach($brand['brand_products'] as $brand_product)
				<div class="fieldsetrow">
					<label style="text-align:left; margin-left:20px;">
						{{ strtoupper($brand_product['product']['product']) }}
					</label>
					
					<span class="button">
						<button class="btn btn-primary">ADD ITEM</button>
					</span>
				</div>
@endforeach

				<div class="spacer20"></div>
				
			</fieldset>
@endforeach 			

@endsection