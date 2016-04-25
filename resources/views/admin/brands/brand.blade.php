@extends('layout/admin')

@section('main')

			{!! Form::model($Brand, ['id'=>'BrandForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.brands.update', $Brand->id], 'class'=>'form80']) !!}			

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('brand', 'Brand:') !!}
					{!! Form::text('brand') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formtextarea">
					{!! Form::label('about', 'ABOUT:') !!}
					{!! Form::textarea('about') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formtextarea">
					{!! Form::label('about_fr', 'ABOUT:') !!}
					{!! Form::textarea('about_fr') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('keywords', 'KEYWORDS:') !!}
					{!! Form::text('keywords') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('keywords_fr', 'KEYWORDS (FR):') !!}
					{!! Form::text('keywords_fr') !!}
				</div>
				
				<div class="spacer10"></div>				

				<div class="formrow">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::text('description') !!}
				</div>

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::text('description_fr') !!}
				</div>

				<div class="spacer10"></div>				
				
				<div class="formrow">
					{!! Form::label('website', 'WEBSITE:') !!}
					{!! Form::text('website') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formimagerow edit">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
					<span id="imagename" style="display:inline-block; position:absolute; margin-left:10px; margin-top:5px;"></span>
					<img style="margin-right:40px;" src="images/{{ $Brand->image }}" />
				</div>
				
				<div class="spacer20"></div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>				
				
				<div class="spacer20"></div>
				
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