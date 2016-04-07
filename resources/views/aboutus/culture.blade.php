@extends('layout/default')

@section('main')

			<div id="banner">
				<img src="images/cdf-banners-about_culture.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="culturetitle" style="position:relative; z-index:3; color:#fff;">Culture & Quality</h1>
			</div>
			
			<script>
				$('.culturetitle').css('top','-' + (($('#banner').height() + $('.culturetitle').height()) / 2) + 'px');
			</script>
			
			<div class="spacer40"></div>
			
			<div class="culture_item" id="weareknown">
				
				<div class="culture_image">
					<img style="width:600px; height:390px;" src="images/We-are-known-as-CDFAudio1.jpg" />
				</div>
				
				<div class="culture_info" style="">
					<h3 style="text-transform:uppercase; text-align:left;">
						{{ languages('We are known as CDFaudio', 'Nous sommes CDFaudio') }}
					</h3>
					<div style="white-space:pre-wrap;">
@if (Session::get('lang') == 'EN')					
Coup de foudre literally means clap of thunder, the expression is used to describe love at first sight.

We are a small boutique, owned by dedicated individuals, professionals with great skill and experience.

Being fiercely independent has allowed us to curate a selection of the world’s finest electronics and loudspeakers. Choosing the products and companies we work with solely on merit, we have gained an impeccable reputation in North America for our unique hi-end systems.
@else
L’expression « coup de foudre » combine l’harmonie de l’amour au son du tonnerre pour décrire un amour subit qui se manifeste dès la première rencontre.

Notre indépendance nous a permis d’établir une sélection de produits audio et vidéo de la plus grande qualité. En choisissant au mérite les produits et les entreprises avec lesquelles nous faisons affaire, nous avons pu nous forger une excellente réputation en Amérique du Nord quant à nos systèmes haut de gamme uniques.
@endif
					</div>

				</div>				
				
			</div>
			
			<div class="spacer20"></div>
			
			<hr>
			
			<div class="spacer20"></div>
			
			<div class="culture_item" id="culture">
				<div class="culture_image">
					<img style="width:600px; height:390px;" src="images/Supporting-the-culture.jpg" />
				</div>
				
				<div class="culture_info">
					<h3 style="text-transform:uppercase; text-align:left;">
						{{ languages('Supporting the culture', 'La culture') }}
					</h3>
					<div style="white-space:pre-wrap;">
@if (Session::get('lang') == 'EN')					
We have been developing our expertise over several decades and as a stereo and video boutique since 2005.
We love music and film and take our products and client relationships very seriously.

Our motivation is simply to bring extra-ordinary audio and video systems to those passionate about music and film.

We propose taking the time to discover elegantly designed, beautifully engineered and well crafted components. You are welcome, in our listening room, in our studio, at your home or business to audition the absolute finest hi-fidelity and home-theatre equipment.

You can rely on our care to lead you to realize your ultimate system.
@else
Depuis plusieurs décennies, les membres de Coup de Foudre n’ont cessé de développer leur expertise. Ils ont réuni leurs compétences en 2005, marquant l’établissement officiel de notre équipe. Nous sommes passionnés de musique et de film. Les relations que nous entretenons avec nos clients nous tiennent très à cœur.

Notre motivation consiste à fournir des systèmes audio et vidéo exceptionnels à tous les passionnés de musique et de film.

Nous suggérons de prendre le temps de découvrir tous les produits offerts, conçus de manière élégante, travaillés avec soin. Nous vous accueillons dans notre boutique, notre studio, ou nous nous déplaçons à votre domicile ou dans votre entreprise pour auditionner les meilleurs équipements haute-fidélité ou cinéma maison.

Vous pouvez compter sur l’expertise de nos conseillers, qui vous aideront à créer le système de vos rêves.
@endif
					</div>
				</div>
				
			</div>
			
			<div class="spacer40"></div>
			
		<script>
			$.fn.isOnScreen = function(){
				var win = $(window);
				var viewport = {top:win.scrollTop(),left:win.scrollLeft()};
				viewport.right = viewport.left + win.width();
				viewport.bottom = viewport.top + win.height();

				var bounds = this.offset();
				bounds.right = bounds.left + this.outerWidth();
				bounds.bottom = bounds.top + this.outerHeight();

				return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
			};
			
			//alert( $('.culture_info').eq(0).position().left );
			
			$.each($('.culture_item'),function(){
				
				var culture_image = $(this).find('.culture_image');				
				$(culture_image).css('left','-' + ($(culture_image).width()) + 'px');
				$(culture_image).attr('data-left',$(culture_image).position().left);
				
				var culture_info = $(this).find('.culture_info');
				$(culture_info).css('left', $(this).width() - $(culture_info).width() - 100 );
				$(culture_info).attr('data-left', $(culture_info).position().left );				
				
				$(this).attr('data-on-screen','0');
				
			});
			
			checkItems();
			
			$(document).ready(function(){ 
				
				
				
				$(window).scroll(function(){
					
					checkItems();
					
				});
				
			});
			
			function checkItems()
			{
				
				$.each($('.culture_item'),function(index){
					
					if ($(this).isOnScreen())
					{
						
						if ( $(this).attr('data-on-screen') == '0' )
						{
							$(this).attr('data-on-screen','1');
							
							$(this).find('.culture_image').animate({opacity:1,left:20},1000);
							$(this).find('.culture_info').animate({opacity:1,left:20},1000);
							
							//var culture_info = 	$(this).find('.culture_info');
							
							//alert( $(culture_info).attr('data-left') );
							
							//$(culture_info).animate({opacity:1,left: parseInt($(culture_info).attr('data-left')) },1000);
						}
								
					}
					else
					{
							
						if ( $(this).attr('data-on-screen') == '1' )
						{
							$(this).attr('data-on-screen','0');

							var culture_image = $(this).find('.culture_image');
							$(culture_image).css('opacity',0).css('left',parseInt($(culture_image).attr('data-left')));
							
							var culture_info = $(this).find('.culture_info');
							$(culture_info).css('opacity',0).css('left',parseInt($(culture_info).attr('data-left')));
							
						}
								
					}
					
				});
					
			}
		</script>
		
@endsection


		
		