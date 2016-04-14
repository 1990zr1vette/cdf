@extends('layout/admin')

@section('main')

			{!! Form::model($Member, ['id'=>'EditorialForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.team.update', $Member->id], 'class'=>'form80']) !!}			

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

				<div style="width:100%; text-align:center;">
					<img src="images/{{ $Member->image }}" />
				</div>
				
				<div class="formimagerow">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
				</div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>				
				
				<div class="spacer20"></div>
				
			{!! Form::close() !!}			

			<div class="spacer40"></div>
			
			<script> 
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
				$('#imagebutton').css('left',$('#image').position().left);
				$('#image').css('height', $('#imagebutton').height() + parseInt( $('#imagebutton').css('padding-bottom').replace('px','') ) + parseInt( $('#imagebutton').css('padding-top').replace('px','') ) + 2);
				$('#image').css('width', $('#imagebutton').width() + parseInt( $('#imagebutton').css('padding-left').replace('px','') ) + parseInt( $('#imagebutton').css('padding-right').replace('px','') ) + 2);
				$('#imagebutton').click(function(){$('#image').click();});				
				$('#image').change(function(){$('#imagename').html($(this)[0].files[0].name);});
			</script>

@endsection