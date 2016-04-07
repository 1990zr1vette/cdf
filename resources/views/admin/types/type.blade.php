@extends('layout/admin')

@section('main')
			
			{!! Form::model($type, ['id'=>'ajaxform', 'method'=>'PATCH', 'route'=>['admin.types.update', $type['id']], 'class'=>'form80']) !!}	

				<div class="formrow">
					{!! Form::label('product', 'TYPE:') !!}
					{!! Form::text('type') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('type_fr', 'TYPE (FR):') !!}
					{!! Form::text('type_fr') !!}
				</div>	
				
				<div class="formrow">
					{!! Form::label('keywords', 'KEYWORDS:') !!}
					{!! Form::text('keywords') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('keywords_fr', 'KEYWORDS (FR):') !!}
					{!! Form::text('keywords_fr') !!}
				</div>

				<div class="formrow">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::text('description') !!}
				</div>

				<div class="formrow">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::text('description_fr') !!}
				</div>		
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>
					
			{!! Form::close() !!}
	
			<script> 
				$('input').attr('required',true);
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