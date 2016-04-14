@extends('layout/admin')

@section('main')

			<h3>ADD PROFESSIONAL</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'addprofessionalform', 'method'=>'POST', 'route'=>'admin.professionals.store', 'class'=>'form80']) !!}
		
				<div class="formrow">
					{!! Form::label('professional', 'PROFESSIONAL:') !!}
					{!! Form::text('professional') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>				
												
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD PROFESSIONAL</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[name=professional]').attr('required',true);
			</script> 	

@endsection