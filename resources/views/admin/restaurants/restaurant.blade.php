@extends('layout/admin')

@section('main')
			
			<div class="spacer20"></div>
			
			{!! Form::model($Restaurant, ['method'=>'PATCH', 'route'=>['admin.restaurants.update', $Restaurant->id], 'class'=>'form80']) !!}	
		
				<div class="formrow">
					{!! Form::label('restaurant', 'RESTAURANT:') !!}
					{!! Form::text('restaurant') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>				
												
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE RESTAURANT</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[name=restaurant]').attr('required',true);
			</script> 	

@endsection