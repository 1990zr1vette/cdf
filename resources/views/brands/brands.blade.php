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
				
				<div class="brandinfo" style="width:100%;">
					<div class="brandspacer"></div>
					<div class="brandimage" style="height:100px; width:15%; float:left;">
						<img style="height:100px; width:100%;" src="images/{{$Brand->image}}" />
					</div>
					<div class="brandspacer"></div>
					<div class="brandabout" style="overflow:hidden; white-space:pre-wrap; width:80%; float:left;"><span>{!! languages($Brand->about, $Brand->about_fr) !!}</span></div>
					<div class="brandspacer"></div>
				</div>
	
			</div>
			
			<div class="spacer20"></div>
@endforeach			

			<script>
				$.each($('.brand'),function(){
					var aboutheight = $(this).find('.brandabout').height();
					$(this).find('.brandinfo').attr('data-height', aboutheight);
					$(this).find('.brandabout').attr('data-height', aboutheight);
					$(this).find('.brandinfo').css('height','100px');					
					$(this).find('.brandabout').css('height','100px');
					if (aboutheight > 100)
					{
						$(this).append('<span data="0" class="moretag">[+] MORE</span>');
						$(this).append('<div class="spacer10"></div>');
					}
					else
					{
						$(this).append('<div class="spacer30"></div>');
					}
				});
				
				$.each($('.brand'),function(){$(this).attr('data-height',$(this).height());});				
				
				$('.moretag').click(function(){
					if ( $(this).attr('data') == '0' )
					{
						$(this).attr('data', '1');
						var html = $(this).html().replace('+','-').replace('MORE','LESS');
						$(this).html(html);
						var brand = $(this).parent();
						var brandheight = $(brand).height();
						var brandabout = $(brand).find('.brandabout');					
						var brandaboutheight = parseInt($(brandabout).attr('data-height'));
						var difference = brandaboutheight - 100;
						var footerTop = $('footer').offset().top;
						$('footer').animate({top:footerTop + difference});
						$(brand).animate({height:brandheight + difference});
						$(brandabout).animate({height:brandaboutheight});
					}
					else
					{
						$(this).attr('data', '0');
						var html = $(this).html().replace('-','+').replace('LESS','MORE');
						$(this).html(html);
						var brand = $(this).parent();
						var brandheight = $(brand).height();
						var brandabout = $(brand).find('.brandabout');					
						var brandaboutheight = parseInt($(brandabout).attr('data-height'));
						var difference = brandaboutheight - 100;
						var footerTop = $('footer').offset().top;
						$('footer').animate({top:footerTop - difference});
						$(brand).animate({height:brandheight - difference});
						$(brandabout).animate({height:100});
					}
				});
			</script>
			
@endsection