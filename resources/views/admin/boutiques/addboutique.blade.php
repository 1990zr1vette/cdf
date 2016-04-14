@extends('layout/admin')

@section('main')

			<h3>ADD BOUTIQUE</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'addboutiqueform', 'method'=>'POST', 'route'=>'admin.boutiques.store', 'class'=>'form80']) !!}
		
				<div class="formrow">
					{!! Form::label('boutique', 'BOUTIQUE:') !!}
					{!! Form::text('boutique') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>				
												
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD BOUTIQUE</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[name=artist]').attr('required',true);
			</script> 	

@endsection