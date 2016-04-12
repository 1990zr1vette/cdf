@extends('layout/admin')

@section('main')

			<h3>{{ $product['product'] }}</h3>
			
			<div class="spacer20"></div>
			
			{!! Form::open(['id'=>'ajaxform', 'method'=>'POST', 'route'=>'admin.products.types.store', 'class'=>'form80']) !!}	

				{!! Form::hidden('product_id',$product['id']) !!}
			
				<div class="formrow">
					{!! Form::label('type', 'TYPE:') !!}
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
					<button type="submit" class="btn btn-primary">ADD TYPE</button>					
				</div>
					
			{!! Form::close() !!}

@endsection