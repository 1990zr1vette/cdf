@extends('layout/admin')

@section('main')
			
			<div class="spacer20"></div>
			
			{!! Form::model($Testimonial, ['method'=>'PATCH', 'route'=>['admin.testimonials.update', $Testimonial->id], 'class'=>'form80']) !!}	
		
				<div class="spacer20"></div>
				
				<div style="width:100%; text-align:center;">					
					<input type="radio" id="fr" name="language" value="0"><label>FRENCH</label>					
					<input type="radio" id="en" name="language" value="1"><label>ENGLISH</label>
				</div>
				
				<div class="spacer20"></div>
				
				<div style="width:100%; text-align:center;">
					<input type="hidden" id="active" name="active" value="{{ $Testimonial->active }}" />
					<input type="checkbox" id="activecheckbox" /><label>ACTIVE</label>
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
					<button type="submit" class="btn btn-primary">UPDATE TESIMONIAL</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 				
				var language = '{{ $Testimonial->language }}';
				var active = '{{ $Testimonial->active }}';
				
				if (language == '0')
					$('#fr').prop('checked', true);
				else
					$('#en').prop('checked', true);
				
				if (active == '0')
				{
					$('#activecheckbox').prop('checked', false);
				}
				else
				{
					$('#activecheckbox').prop('checked', true);
				}
				
				$('#activecheckbox').click(function(){
					
					if ($(this).is(':checked'))
						$('#active').val('1');
					else
						$('#active').val('0');
					
				});
				
				$('input[name=testimonial]').attr('required',true);				
			</script> 	

@endsection