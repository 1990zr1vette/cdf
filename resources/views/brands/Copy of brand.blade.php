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
				
@foreach($Brand->BrandInventoryItems()->where('product_id', $BrandProduct->Product->id)->get() as $Item)
				<div class="item">
					<div class="spacer20"></div>
					<span class="img">
						<img src="images/{{ $Item->image }}" />
					</span>	
					<span class="info">
						<h3><span>{{ $Item->Brand->brand }} {{ $Item->model }}</span></h3>
						<div class="spacer10"></div>
						<div style="white-space:pre-wrap;">{{ languages($Item->description, $Item->description_fr) }}</div>
					</span>
				</div>
				<div class="spacer10"></div>
@endforeach				
			</div>
			
			<div class="spacer20"></div>

@endforeach	
@endsection