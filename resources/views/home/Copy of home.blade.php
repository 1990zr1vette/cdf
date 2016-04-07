@extends('layout/default')

@section('main')

			<div id="slider" style="overflow:hidden;"></div>			
		
			<script>
				$('#slider').css('height',$(window).height() - $('header').height()).css('width',$(window).width());
				
				var slider = new BeaverSlider({					
					structure:{
						container:{id:"slider",width:$(window).width(),height:$(window).height() - $('header').height()},
						//messages:{top:360,left:0,containerClass:'message-container'}
					},
					content:{
						images:["images/slider/slider1.jpg","images/slider/slider2.jpg","images/slider/slider3.jpg","images/slider/slider4.jpg"],
						//messages:["<span></span>AMPLIFIERS","<span></span>TURNTABLES","<span></span>SPEAKERS","<span></span>TELEVISIONS","<span></span>ACCESSORIES","<span></span>PLAYERS"]
					},
					animation:{waitAllImages: true,effects:'chessBoard:1500,jalousie:1500,pancake:1500,prison:1500,weed:1500',interval:3000,showMessages:"linked",messageAnimationDirection:"up,down,left,right",messageAnimationDuration:1500}
				});
				
			</script>

			<div id="brands" style="min-height:20px; width:100%; background-color:rgb(47,53,60);">
				<div class="spacer10"></div>
				<h2 style="color:#fff;">{{ translate('OUR BRANDS', 'NOS MARQUES') }}</h2>
				<div class="spacer10"></div>
@foreach($Brands as $Brand)
				<span class="brandrow" style="display:inline-block; height:40px; width:25%; float:left; text-align:center;">
					<a href="{{ languages('brands','marques') }}/{{ fixSegment($Brand->brand) }}/{{ $Brand->id}}">
						{{ $Brand->brand }}
					</a>
				</span>				
@endforeach
			</div>
			
			<script>
				var brandrows = Math.ceil($('.brandrow').size() / 4);
				$('#brands').css('height', ($('#brands').height() + (brandrows * $('.brandrow').height())) + 'px');
			</script>
			
@endsection