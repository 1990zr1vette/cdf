@extends('layout/admin')

@section('main')

			<h3>ADD MEMBER</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'files' => true, 'method'=>'POST', 'route'=>'admin.team.store', 'class'=>'form80']) !!}	
						
				<div class="formrow">
					{!! Form::label('first_name', 'FIRST NAME:') !!}
					{!! Form::text('first_name') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('last_name', 'LAST NAME:') !!}
					{!! Form::text('last_name') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('position', 'POSITION:') !!}
					{!! Form::text('position') !!}
				</div>

				<div class="formrow">
					{!! Form::label('position_fr', 'POSITION (FR):') !!}
					{!! Form::text('position_fr') !!}
				</div>	

				<div class="formtextarea">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::textarea('description') !!}
				</div>

				<div class="formtextarea">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::textarea('description_fr') !!}
				</div>

				
				<div class="formimagerow">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD MEMBER</button>					
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