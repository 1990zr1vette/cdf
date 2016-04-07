@extends('layout/admin')

@section('main')
			
			<div class="button">
				<a href="admin/products/{{ $product['id'] }}/types/create">
					<button type="submit" class="btn btn-primary">ADD TYPE</button>
				</a>
			</div>
			
			<fieldset>
				<legend align="center">{{ $product['product'] }}</legend>
				
@foreach($types as $type)
				<div class="fieldsetrow">
					
					<span class="">{{ $type['type'] }}</span>
					
					<span class="button">
						<a href="admin/products/{{ $product['id'] }}/types/{{ $type['id'] }}/edit">
							<button class="btn btn-primary">EDIT</button>
						</a>
					</span>
					
				</div>
@endforeach
			
			</fieldset>

@endsection