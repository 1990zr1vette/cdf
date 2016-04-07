<?php
use \App\Models\BrandProduct;
?>
@extends('layout/default')

@section('main')

			<h3>{{ $Brand->brand }}</h3>
			
			<div class="spacer20"></div>

@foreach($BrandProducts as $BrandProduct)
			<div>
				<h3>
					<a href="brands/{{ fixSegment($Brand->brand) }}/{{ fixSegment($BrandProduct->Product->product, $BrandProduct->Product->product_fr) }}/{{ $Brand->id }}/{{ $BrandProduct->Product->id }}">
						{{ languages($BrandProduct->Product->product, $BrandProduct->Product->product_fr) }}
					</a>
				</h3>
				
				<div class="spacer10"></div>			
				
@foreach($Brand->BrandInventoryItems()->where('product_id', $BrandProduct->Product->id)->get() as $InventoryItem)
				<div class="item">
					<div class="spacer20"></div>
					<span class="img">
						<img src="images/{{ $InventoryItem->image }}" />
					</span>	
					<span class="info">
						<h3><span>{{ $Brand->brand }} {{ $InventoryItem->model }}</span></h3>
						<div class="spacer20"></div>
						<div class="itemdescription">{{ languages($InventoryItem->description, $InventoryItem->description_fr) }}</div>
					</span>
				</div>
				<div class="spacer10"></div>
@endforeach	
		
			</div>
			
			<script>
				$.each($('.info'),function(){
					
					//var itemdescription = $(this).find('.itemdescription');
					//var h3 = $(this).find('h3');
					
					//$(itemdescription).css('top', ( ($(this).height() - ($(itemdescription).height() + $(h3).height() + 40)) / 2 ) + 'px');
					
				});
			</script>
			
			<div class="spacer20"></div>
@endforeach

@endsection