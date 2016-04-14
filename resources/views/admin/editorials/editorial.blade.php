@extends('layout/admin')

@section('main')

			{!! Form::model($Editorial, ['id'=>'EditorialForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.editorials.update', $Editorial->id], 'class'=>'form80']) !!}			

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('title', 'TITLE:') !!}
					{!! Form::text('title') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('title_fr', 'TITLE (FR):') !!}
					{!! Form::text('title_fr') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formtextarea">
					{!! Form::label('editorial', 'EDITORIAL:') !!}
					{!! Form::textarea('editorial') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formtextarea">
					{!! Form::label('editorial_fr', 'EDITORIAL (FR):') !!}
					{!! Form::textarea('editorial_fr') !!}
				</div>

				<div style="text-align:center;">
					<img src="images/{{ $Editorial->image }}" >
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formimagerow edit" style="height:80px;">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Change Image</button>
					<span id="imagename" style="display:inline-block; position:absolute; margin-left:10px; margin-top:5px;"></span>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>				
				
			{!! Form::close() !!}			

			
			<script> 
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
				$('#imagebutton').css('left',$('#image').position().left);
				$('#image').css('height', $('#imagebutton').height() + parseInt( $('#imagebutton').css('padding-bottom').replace('px','') ) + parseInt( $('#imagebutton').css('padding-top').replace('px','') ) + 2);
				$('#image').css('width', $('#imagebutton').width() + parseInt( $('#imagebutton').css('padding-left').replace('px','') ) + parseInt( $('#imagebutton').css('padding-right').replace('px','') ) + 2);
				
				$('#imagebutton').click(function(){
					$('#image').click();
				});				
				
				$('#image').change(function(){
					
					$('#imagename').html($(this)[0].files[0].name);
					
				});
			</script>

@endsection