@extends('layout/admin')

@section('main')

			{!! Form::model($Item, ['id'=>'ajaxform', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.brands.products.inventory.update', $Item->brand_id, $Item->product_id, $Item->id], 'class'=>'form80']) !!}
			
				{!! Form::hidden('brand_id') !!}
				{!! Form::hidden('product_id') !!}
				{!! Form::hidden('type_id') !!}
				
				<div class="spacer20"></div>
	
				<div class="formrow">
					{!! Form::label('model', 'MODEL:') !!}
					{!! Form::text('model') !!}
				</div>
				
				<div class="formtextarea">
					{!! Form::label('description', 'DESCRIPTION:') !!}
					{!! Form::textarea('description') !!}
				</div>
				
				<div class="formtextarea">
					{!! Form::label('description_fr', 'DESCRIPTION (FR):') !!}
					{!! Form::textarea('description_fr') !!}
				</div>

				<div class="spacer20"></div>
				
				<div class="formimagerow edit">
					{!! Form::label('image', 'IMAGE:') !!}
					{!! Form::file('image') !!}
					<button type="button" id="imagebutton" class="btn btn-primary">Choose Image</button>
					<span id="imagename" style="display:inline-block; position:absolute; margin-left:10px; margin-top:5px;"></span>
					<img src="images/{{ $Item->image }}" />
				</div>				
				
				<div class="button">
					<button class="btn btn-primary">UPDATE</button>
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