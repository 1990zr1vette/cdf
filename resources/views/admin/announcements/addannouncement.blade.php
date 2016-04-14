@extends('layout/admin')

@section('main')

			<h3>ADD ANNOUNCEMENT</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'method'=>'POST', 'route'=>'admin.announcements.store', 'class'=>'form80']) !!}	
						
				<div class="spacer20"></div>
				
				<div class="formrow">
					{!! Form::label('announcement', 'TITLE:') !!}
					{!! Form::text('announcement') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('announcement_fr', 'TITLE (FR):') !!}
					{!! Form::text('announcement_fr') !!}
				</div>
								
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD ANNOUNCEMENT</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input').attr('required',true);
				$('textarea').attr('required',true);
			</script> 	

@endsection