<?php
use \App\Models\Brand;
?>

@extends('layout/default')

@section('main')
			
			<div class="spacer20"></div>
			
@foreach(Brand::all() as $Brand)
			<div class="brand" style="">
				<div class="spacer10"></div>
				
				<h3>
					<a href="{{ languages(BRANDS, BRANDS_FR) }}/{{ fixSegment($Brand->brand) }}/{{ $Brand->id }}">
						{{ $Brand->brand }}
					</a>
				</h3>
				
				<div class="spacer10"></div>
				
				<div class="brandinfo">
					<div class="image">
						<img src="images/{{$Brand->image}}" />
					</div>
				
					<div class="brandabout">
						{{ languages($Brand->about, $Brand->about_fr) }}
					</div>
				</div>
				
				<div class="spacer20"></div>
	
			</div>
			
			<div class="spacer20"></div>
@endforeach			

			<script>
				$.each($('.brandinfo'),function(){
					$(this).find('.brandabout').css('top', (( $(this).height() - $(this).find('.brandabout').height() ) / 2 ) + 'px');
				})
			</script>
			
@endsection