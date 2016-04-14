@extends('layout/admin')

@section('main')

			<h3>ADD ARTIST</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'addartistform', 'method'=>'POST', 'route'=>'admin.artists.store', 'class'=>'form80']) !!}
		
				<div class="formrow">
					{!! Form::label('artist', 'ARTIST:') !!}
					{!! Form::text('artist') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>				
												
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD ARTIST</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[name=artist]').attr('required',true);
			</script> 	

@endsection