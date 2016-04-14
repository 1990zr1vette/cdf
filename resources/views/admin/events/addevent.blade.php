@extends('layout/admin')

@section('main')

			<h3>ADD EVENT</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'files' => true, 'method'=>'POST', 'route'=>'admin.events.store', 'class'=>'form80']) !!}	
						
				<div class="spacer20"></div>
				
				<div class="formrow">
					{!! Form::label('title', 'TITLE:') !!}
					{!! Form::text('title') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('title_fr', 'TITLE (FR):') !!}
					{!! Form::text('title') !!}
				</div>
				
				<div class="formtextarea">
					{!! Form::label('event', 'EVENT:') !!}
					{!! Form::textarea('event') !!}
				</div>

				<div class="formtextarea">
					{!! Form::label('event_fr', 'EVENT (FR):') !!}
					{!! Form::textarea('event_fr') !!}
				</div>
						
				<div class="formimagerow">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
					<span id="imagename" style="display:inline-block; position:absolute; margin-left:10px; margin-top:5px;"></span>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD EVENT</button>					
				</div>
				
				<div class="spacer20"></div>
					
			{!! Form::close() !!}
	
			<div class="spacer20"></div>
	
			<script> 
				$('input').attr('required',true);
				$('select').attr('required',true);
				$('textarea').attr('required',true);
				$('#imagebutton').css('left',$('#image').position().left);
				$('#image').css('height', $('#imagebutton').height() + parseInt( $('#imagebutton').css('padding-bottom').replace('px','') ) + parseInt( $('#imagebutton').css('padding-top').replace('px','') ) + 2);
				$('#image').css('width', $('#imagebutton').width() + parseInt( $('#imagebutton').css('padding-left').replace('px','') ) + parseInt( $('#imagebutton').css('padding-right').replace('px','') ) + 2);
				$('#imagebutton').click(function(){$('#image').click();});				
				$('#image').change(function(){$('#imagename').html($(this)[0].files[0].name);});
			</script> 			

@endsection