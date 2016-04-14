@extends('layout/admin')

@section('main')

			<h3>ADD TESTIMONIAL</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'addtestimonialform', 'method'=>'POST', 'route'=>'admin.testimonials.store', 'class'=>'form80']) !!}
				<div class="spacer20"></div>
				
				<div style="width:100%; text-align:center;">					
					<input type="radio" name="language" value="0"><label>FRENCH</label>					
					<input type="radio" name="language" value="1"><label>ENGLISH</label>
				</div>
				
				<div class="formrow">
					{!! Form::label('title', 'TITLE:') !!}
					{!! Form::text('title') !!}
				</div>
				
				<div class="formtextarearow">
					{!! Form::label('testimonial', 'TESTIMONIAL:') !!}
					{!! Form::textarea('testimonial') !!}
				</div>		
												
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD TESTIMONIAL</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input[text=text]').attr('required',true);
				$('textarea').attr('required',true);
			</script> 	

@endsection