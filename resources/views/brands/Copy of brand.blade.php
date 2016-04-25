<?php
use \App\Models\BrandProduct;
?>
@extends('layout/default')

@section('main')

			<div id="brandslider">
				<img style="opacity:1;" src="images/brandslider/jpg_shutterstock_84729172615-thumb-615x300-87268.jpg" />
				<img src="images/brandslider/ufos12.jpg" />
				<img style="height:200px;" src="images/brandslider/volume_levels.jpg" />
				<div style="height:200px;" class="banner_overlay"></div>
			</div>
			
			<h1 style="position:absolute; top:80px; color:#fff; z-index:100;">{{ $Brand->brand }}</h1>
				
			<div class="spacer30"></div>

			<div id="brandinfo" style="background-color:#fff; border:1px solid #cfcfcf; border-radius:15px; width:96%; margin:0 auto;">
				<div class="spacer10"></div>
				<div id="brandimage" style="float:left; margin-left:20px;">
					<img src="images/{{ $Brand->image }}" />
				</div>
				<div id="brandabout" style="float:left; margin-left:40px;">
					<h3 style="text-align:left;">
						{{ languages('ABOUT THE BRAND', 'À propos de la marque') }}
@if ($Brand->website)						
						<a target="_blank" style="float:right; margin-right:40px;" href="{{ $Brand->website}}">{{ languages('VIEW COMPANY WEBSITE', 'VOIR LA SITE DE LA MARQUE') }}</a>
@endif					
					</h3>
					<div class="spacer20"></div>
					<div style="white-space:pre-wrap;">{{ languages($Brand->about, $Brand->about_fr) }}</div>
				</div>
				<div class="spacer20"></div>
			</div>
			
			<script>
				$('#brandabout').css('width', $('#brandinfo').width() - ($('#brandimage').width() + 100));
				if ( $('#brandimage').height() > $('#brandabout').height() )
				{					
					$('#brandinfo').css('height', $('#brandimage').height() + 40);	
				}
				else
				{
					$('#brandinfo').css('height', $('#brandabout').height() + 40);
				}
				$('#brandimage').css('margin-top',($('#brandinfo').height() - ($('#brandimage').height() + 20)) / 2);
				
				var slideNo = 0;
				var interval = setInterval(function(){nextSlide();}, 5000);
				function nextSlide()
				{
					$('#brandslider').find('img').eq(slideNo).animate({opacity:0},2000);					
					if (slideNo < ($('#brandslider').find('img').size() - 1)){slideNo++;}else{slideNo = 0;}
					$('#brandslider').find('img').eq(slideNo).animate({opacity:1}, 2000);
				}				
			</script>
			
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
					<div class="spacer30" style="border:1px solid blue;"></div>
				</div>
				<div class="spacer20"></div>
@endforeach	
			</div>
@endforeach				
				
			<script>
				$.each($('.info'),function(){
					
					if ($(this).height() > 160)
					{
						$(this).attr('data-height', $(this).height());
						$(this).css('height', 160);
						//$(this).parent().append('<div data="0" class="readmore">[+] MORE</div>');
					}
					
				});
			</script>
			
			<div class="spacer20"></div>

@endsection