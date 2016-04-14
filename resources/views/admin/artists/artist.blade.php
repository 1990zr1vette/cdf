@extends('layout/admin')

@section('main')

			<div class="spacer20"></div>
			
			{!! Form::model($Artist, ['method'=>'PATCH', 'route'=>['admin.artists.update', $Artist->id], 'class'=>'form80']) !!}	
		
				<div class="formrow">
					{!! Form::label('artist', 'ARTIST:') !!}
					{!! Form::text('artist') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>				
												
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE ARTIST</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[name=artist]').attr('required',true);
			</script> 	

@endsection