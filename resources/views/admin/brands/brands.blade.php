@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/brands/create">
					<button type="submit" class="btn btn-primary">ADD BRAND</button>
				</a>
			</div>
			
@foreach($brands as $brand)
			<div class="productrow row60">
				
				<span class="">{{ $brand['brand'] }}</span>
				
				<span class="button">
					<a href="admin/brands/{{ $brand['id'] }}/products">
						<button class="btn btn-primary">PRODUCTS</button>
					</a>
				</span>	
				
				<span class="button">
					<a href="admin/brands/{{ $brand['id'] }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach

			<div class="spacer40"></div>
			

@endsection