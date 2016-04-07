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
				
				
				<a href="admin/brand/product/delete/{{ $brand_product['id'] }}">
					<button class="btn btn-primary" type="button" style="float:right; margin-right:20px; margin-top:5px;">DELETE </button>
				</a>
			</div>
@endforeach 			

@endsection