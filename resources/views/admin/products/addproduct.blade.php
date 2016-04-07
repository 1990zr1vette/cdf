@extends('layout/admin')

@section('main')

			{!! Form::open(['id'=>'ajaxform', 'method'=>'POST', 'route'=>'admin.products.store', 'class'=>'form80']) !!}	

				<div class="formrow">
					{!! Form::label('product', 'PRODUCT:') !!}
					{!! Form::text('product') !!}
				</div>
				
				<div class="formrow">
					{!! Form::label('product_fr', 'PRODUCT (FR):') !!}
					{!! Form::text('product_fr') !!}
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
					<button type="submit" class="btn btn-primary">ADD PRODUCT</button>					
				</div>
					
			{!! Form::close() !!}
	
			<script> 
				$(document).ready(function(){ 
					$('#ajaxform').ajaxForm(function(response){ 
						if (response == '1')
							window.location = 'admin/products';
						else
							alert('There was a problem');
					}); 
				}); 
			</script> 	

@endsection