@extends('layout/admin')

@section('main')


			<div class="button">
				<a href="admin/products/create">
					<button type="submit" class="btn btn-primary">ADD PRODUCT</button>
				</a>
			</div>
			
@foreach($products as $product)
			<div class="productrow row60">
				
				<span class="">{{ $product['product'] }}</span>
				
				<span class="button">
					<a href="admin/products/{{ $product['id'] }}/types">
						<button class="btn btn-primary">TYPES</button>
					</a>
				</span>
				
				<span class="button">
					<a href="admin/products/{{ $product['id'] }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach
			

@endsection