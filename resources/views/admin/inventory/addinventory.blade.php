@extends('layout/admin')

@section('main')

			<h3>{{ $brand->brand }} {{ $product->product }} ADD ITEM</h3>

			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'method'=>'POST', 'files' => true, 'route'=>'admin.brands.products.inventory.store', 'class'=>'form80']) !!}	
				<input type="hidden" name="brand_id" value="{{ $brand->id }}" />
				<input type="hidden" name="product_id" value="{{ $product->id }}" />
				
				<div class="formrow select">
					<select name="type_id" required>
						<option value="">Choose {{ $product->product }} Type</option>
@foreach($types as $type)
						<option value="{{ $type->id }}">{{ $type->type }}</option>
@endforeach
					</select>
				</div>
				
				<div class="formrow">
					{!! Form::label('model', 'MODEL:') !!}
					{!! Form::text('model') !!}
				</div>

				<div class="formtextarearow">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::textarea('description') !!}
				</div>
				
				<div class="formtextarearow">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::textarea('description_fr') !!}
				</div>

				<div class="formimagerow">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
					<span id="imagename" style="display:inline-block; position:absolute; margin-left:10px; margin-top:5px;"></span>
				</div>				
				
				<div class="button">
					<button type="submit" class="btn btn-primary">ADD ITEM</button>					
				</div>
				
				<div class="spacer20"></div>
				
			{!! Form::close() !!}
			
			<script> 
				$('input').attr('required',true);
				$('select').attr('required',true);
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