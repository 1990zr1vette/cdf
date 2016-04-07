@extends('layout/admin')

@section('main')

			<h3>ADD BRAND</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'files' => true, 'method'=>'POST', 'route'=>'admin.brands.store', 'class'=>'form80']) !!}	
		
				<div class="formrow">
					{!! Form::label('brand', 'BRAND:') !!}
					{!! Form::text('brand') !!}
				</div>
				
				<div class="formtextarearow">
					{!! Form::label('about', 'ABOUT:') !!}
					{!! Form::textarea('about') !!}
				</div>

				<div class="formtextarearow">
					{!! Form::label('about_fr', 'ABOUT (FR):') !!}
					{!! Form::textarea('about_fr') !!}
				</div>
				
				<div class="formimagerow">
					{!! Form::label('image', 'LOGO:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
				</div>				
								
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD BRAND</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input').attr('required',true);
				$('textarea').attr('required',true);
				$('#imagebutton').css('left',$('#image').position().left);
				$('#image').css('height', $('#imagebutton').height() + parseInt( $('#imagebutton').css('padding-bottom').replace('px','') ) + parseInt( $('#imagebutton').css('padding-top').replace('px','') ) + 2);
				$('#image').css('width', $('#imagebutton').width() + parseInt( $('#imagebutton').css('padding-left').replace('px','') ) + parseInt( $('#imagebutton').css('padding-right').replace('px','') ) + 2);
				$('#imagebutton').click(function(){$('#image').click();});				
				$(document).ready(function(){$('#ajaxform').ajaxForm(function(response){if (response == '1') window.location = 'admin/brands'; else alert('There was a problem');}); }); 
			</script> 	

@endsection