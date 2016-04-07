<?php
use \App\Models\Brand;
?>

@extends('layout/default')

@section('main')

			<h3>BRANDS</h3>
			
			<div class="spacer40"></div>
			
@foreach(Brand::all() as $Brand)
			<div style="width:90%; margin:0 auto; border:1px solid #cfcfcf; border-radius:15px; background-color:#fff;">
				<h4><a href="brands/{{ fixSegment($Brand->brand) }}/{{ $Brand->id }}">{{ $Brand->brand }}</a></h4>
		
				<img src="images/{{$Brand->image}}" />
		
				@foreach($Brand->BrandProducts as $BrandProduct)
				<div style="width:90%; margin:0 auto; float:left;">
					{{ translate($BrandProduct->Product->product, $BrandProduct->Product->product_fr) }}
					
					@foreach($Brand->BrandInventoryItems()->where('product_id', $BrandProduct->Product->id)->get() as $Item)
					<div style="height:30px; width:90%; line-height:30px; margin:0 auto;">
						{{ $Item->model }}
					</div>
					<div class="spacer10"></div>
					@endforeach
					
				</div>
				<div class="spacer10"></div>
				@endforeach
	
			</div>
			
			<div class="spacer40"></div>
@endforeach			

			
@endsection