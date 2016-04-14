@extends('layout/admin')

@section('main')

			<h3>ADD EDITORIAL</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'files' => true, 'method'=>'POST', 'route'=>'admin.editorials.store', 'class'=>'form80']) !!}	
						
				<div class="formrow">
					{!! Form::label('title', 'TITLE:') !!}
					{!! Form::text('title') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('title_fr', 'TITLE (FR):') !!}
					{!! Form::text('title_fr') !!}
				</div>
				
				<div class="formtextarearow">
					{!! Form::label('editorial', 'EDITORIAL:') !!}
					{!! Form::textarea('editorial') !!}
				</div>

				<div class="formtextarearow">
					{!! Form::label('editorial_fr', 'EDITORIAL (FR):') !!}
					{!! Form::textarea('editorial_fr') !!}
				</div>				
				
				<div class="formimagerow">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD EDITORIAL</button>					
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
			</script> 	

@endsection