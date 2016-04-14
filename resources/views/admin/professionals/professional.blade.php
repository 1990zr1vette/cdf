@extends('layout/admin')

@section('main')
			
			<div class="spacer20"></div>
			
			{!! Form::model($Professional, ['method'=>'PATCH', 'route'=>['admin.professionals.update', $Professional->id], 'class'=>'form80']) !!}	
		
				<div class="formrow">
					{!! Form::label('professional', 'PROFESSIONAL:') !!}
					{!! Form::text('professional') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>				
												
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE PROFESSIONAL</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[name=professional]').attr('required',true);
			</script> 	

@endsection