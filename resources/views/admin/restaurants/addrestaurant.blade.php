@extends('layout/admin')

@section('main')

			<h3>ADD RESTAURANT</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'addrestaurantform', 'method'=>'POST', 'route'=>'admin.restaurants.store', 'class'=>'form80']) !!}
		
				<div class="formrow">
					{!! Form::label('restaurant', 'RESTAURANT:') !!}
					{!! Form::text('restaurant') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>				
												
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD RESTAURANT</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[name=restaurant]').attr('required',true);
			</script> 	

@endsection