@extends('layout/admin')

@section('main')

			<h3>ADD {{ $brand['brand'] }} PRODUCT TYPE</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'method'=>'POST', 'route'=>'admin.brands.products.store', 'class'=>'form80']) !!}	

				{!! Form::hidden('brand_id',$brand['id']) !!}
			
				<div class="spacer20"></div>
			
				<div style="height:50px; line-height:50px; width:100%; text-align:center;">
					<label style="margin-right:5px;">PRODUCT: </label>
					<select id="product_id" name="product_id">
						<option value="">Choose a Product&nbsp;&nbsp;</option>
@foreach($Products as $Product)
						<option value="{{ $Product->id }}">{{ $Product->product }}</option>
@endforeach
					</select>
				</div>				
				
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD PRODUCT</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div> 	


@endsection