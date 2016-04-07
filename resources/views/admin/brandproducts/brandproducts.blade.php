@extends('layout/admin')

@section('main')

			<h2>BRAND: {{ $brand['brand'] }}</h2>

			<div class="button">
				<a href="admin/brands/{{ $brand['id'] }}/products/create">
					<button type="submit" class="btn btn-primary">ADD PRODUCT</button>
				</a>
			</div>
			
@foreach($brand_products as $brand_product)
			<div class="productrow row60">
				<span class="">{{ $brand_product['product']['product'] }}</span>
				
				<span class="button">
					<a href="admin/brands/{{ $brand['id'] }}/products/{{ $brand_product['product']['id'] }}/inventory">
						<button class="btn btn-primary">ITEMS</button>
					</a>
				</span>
				
				<span class="button">
					<a href="">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>				
				


			</div>
@endforeach 			

@endsection