@extends('layout/default')

@section('main')

			<h3>BRANDS</h3>
			
			<div class="spacer40"></div>
			
@foreach($brands as $brand)
			<fieldset class="fieldset80">
				<legend align="center">{{ $brand->brand }}</legend>
				
@foreach($brand['products'] as $product)
				<div>
					<span>{{ print_r($product) }}</span>
				</div>
@endforeach
				
			</fieldset>
			
			<div class="spacer40"></div>
@endforeach			

			
@endsection