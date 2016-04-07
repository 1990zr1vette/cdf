@extends('layout/default')

@section('main')

			<h3>{{ $Brand->brand }} - {{ languages($Product->product, $Product->product_fr) }}</h3>

			<div class="spacer20"></div>
			
@foreach($BrandProducts as $BrandProduct)
			<div class="brand">
			
				<div class="spacer10"></div>
				
				<div class="brandinfo">
					<div class="image">
						<img src="images/{{ $Brand->image }}" />
					</div>
				
					<div class="brandabout">
						{{ languages($Brand->about, $Brand->about_fr) }}
					</div>
				</div>
				
				<div class="spacer10"></div>
				
			</div>
			
			<div class="spacer20"></div>

@endforeach
			
			<script>
				$.each($('.brandinfo'),function(){
					$(this).find('.brandabout').css('top', (( $(this).height() - $(this).find('.brandabout').height() ) / 2 ) + 'px');
				})
			</script>
			
@endsection