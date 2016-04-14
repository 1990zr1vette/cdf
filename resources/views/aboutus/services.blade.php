@extends('layout/default')

@section('main')

			<div id="banner">
				<img src="images/cdf-banners-about_studioservices.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle">{{ languages('Studio & Services', 'Studio et Services') }}</h1>
			</div>
			
			<script src="js/banner.js" type="text/javascript"></script>
			
			<div class="spacer20"></div>
			
			<div class="studioservice">
				<div class="spacer20"></div>
				
				<div class="studioserviceleft">						
					<div class="studioservicetitle">
						<img src="images/icon_services_consultation.png" />
						<span>{{ languages('CONSULTATION', 'CONSULTATION') }}</span>
					</div>
					<div class="spacer20"></div>
					<div class="studioserviceinfo">						
						<div>{{ languages('Vie email, telephone, on site, at your home or business', 'Par courriel, par téléphone, sur place, à votre domicile ou dans votre entreprise') }}</div>
						<div>{{ languages('Pre-construction', 'Pré-construction') }}</div>
						<div>{{ languages('Wiring', 'Câblage') }}</div>
						<div>{{ languages('Network', 'Réseau') }}</div>
						<div>{{ languages('Room design', 'Aménagement de salle') }}</div>
						<div>{{ languages('Power recommendations', 'Recommandations en matière d’énergie') }}</div>
						<div>{{ languages('System optimization', 'Optimisation de système') }}</div>
						<div>{{ languages('Component matching', 'Association de composants') }}</div>
						<div>{{ languages('We are Canada Wide!', 'Présents dans tout le Canada!') }}</div>
					</div>
				</div>
				<div class="studioserviceright">
					<div class="studioservicetitle">
						<img src="images/icon_services_installation.png" />	
						<span>{{ languages('INSTALLATION', 'INSTALLATION') }}</span>
					</div>				
					<div class="spacer20"></div>			
					<div class="studioserviceinfo">
						<div>{{ languages('Delivery', 'Livraison') }}</div>
						<div>{{ languages('Speaker placement', 'Positionnement de haut-parleurs') }}</div>
						<div>{{ languages('Acoustic adjustments', 'Réglage acoustique') }}</div>
						<div>{{ languages('Calibration for projectors', 'Calibration des projecteurs') }}</div>
						<div>{{ languages('Surround sound', 'Son multicanal') }}</div>
						<div>{{ languages('Theatre', 'Salle de spectacle') }}</div>
						<div>{{ languages('Turntable adjustments', 'Réglage de platine') }}</div>
					</div>
				</div>
				<div class="spacer20"></div>				
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<div class="studioservice">
				<div class="spacer20"></div>
				<div class="studioserviceleft">	
					<div class="studioservicetitle">
						<img src="images/icon_services_demo.png" />
						<span>{{ languages('Product Demo', 'Démonstration de Produit') }}</span>
					</div>
					<div class="spacer20"></div>
					<div class="studioserviceinfo">
						<div>{{ languages('In home trial', 'Essai à domicile') }}</div>
						<div>{{ languages('You can pick up', 'Vous pouvez venir le chercher') }}</div>
						<div>{{ languages('We can set-up', 'Nous pouvons venir l’installer') }}</div>
						<div>{{ languages('We will ship for demonstration', 'Nous expédions les produits à essayer') }}</div>
						<div>{{ languages('Come and hear it or see it at our showroom', 'Venez l’écouter ou l’observer dans notre salle d’exposition') }}</div>
					</div>
				</div>
				<div class="studioserviceright">
					<div class="studioservicetitle">
						<img src="images/icon_services_service.png" />
						<span>{{ languages('Service', 'Service') }}</span>
					</div>
					<div class="spacer20"></div>				
					<div class="studioserviceinfo">
						<div>{{ languages('Warranty repairs', 'Réparations couvertes par la garantie') }}</div>
						<div>{{ languages('Adjustments', 'Réglages') }}</div>
						<div>{{ languages('Tubes & Calibrations', 'Tubes et calibrages') }}</div>
						<div>{{ languages('Cartridge replacement', 'Remplacement de cartouche') }}</div>
						<div>{{ languages('Driver replacement', 'Remplacement de haut-parleurs individuels') }}</div>
						<div>{{ languages('On site or at our showroom', 'Sur place dans notre salle d’exposition') }}</div>
						<div>{{ languages('Cable customization', 'Personnalisation de câbles') }}</div>
					</div>
				</div>
				<div class="spacer20"></div>				
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<div class="studioservice">
				<div class="spacer20"></div>
				<div class="studioserviceleft">	
					<div class="studioservicetitle">
						<img src="images/icon_services_studio.png" />
						<span>{{ languages('Studio', 'Studio') }}</span>
					</div>
					<div class="spacer20"></div>
					<div class="studioserviceinfo">
						<div>{{ languages('We mix it – best vintage outboard gear', 'Nous mixons – meilleur équipement extérieur vintage') }}</div>
						<div>{{ languages('We have engineers', 'Nous disposons d’ingénieurs') }}</div>
						<div>{{ languages('We rent our room', 'Nos salles sont à louer') }}</div>
					</div>
				</div>
				<div class="studioserviceright">
					<div class="studioservicetitle">
						<img src="images/icon_services_venue.png" />
						<span>{{ languages('Venue', 'Salle') }}</span>
					</div>
					<div class="spacer20"></div>				
					<div class="studioserviceinfo">
						<div>{{ languages('We rent our space for events', 'Nos salles sont à louer pour vos évènements') }}</div>
						<div>{{ languages('Vernissage', 'Vernissage') }}</div>
						<div>{{ languages('Screening', 'Projection') }}</div>
						<div>{{ languages('Album launch', 'Sortie d’album') }}</div>
						<div>{{ languages('Private events', 'Évènements privés') }}</div>
						<div>{{ languages('Video projection', 'Projection de vidéo') }}</div>
						<div>{{ languages('Parties', 'Fêtes') }}</div>
						<div>{{ languages('TV and film', 'Télévision et films') }}</div>
						<div>{{ languages('Live Music', 'Musique en direct') }}</div>
						<div>{{ languages('Seminars', 'Séminaires') }}</div> 
					</div>
				</div>
				<div class="spacer20"></div>				
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<script>
				var studioserviceWidth = $('.studioservice').eq(0).width();
				var marginLeft = ($(window).width() - studioserviceWidth) / 2;
				
				$.each($('.studioservice'),function(){
					
					if ($(this).find('.studioserviceleft').height() > $(this).find('.studioserviceright').height())
					{
						$(this).css('height', $(this).find('.studioserviceleft').height() + 40);
					}
					else
					{
						$(this).css('height', $(this).find('.studioserviceright').height() + 40);
					}	
					
					$(this).find('.studioserviceleft').css('left', '-' + ((studioserviceWidth - marginLeft) / 2) + 'px').attr('data-left', '-' + ((studioserviceWidth - marginLeft) / 2));
					$(this).find('.studioserviceright').css('left',(studioserviceWidth / 2) + 'px').attr('data-left', (studioserviceWidth / 2) + 'px');
					$(this).attr('data-on-screen','0');
					
					
				});
				
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
				checkItems();
				$(document).ready(function(){$(window).scroll(function(){checkItems();});});				
				function checkItems()
				{
					$.each($('.studioservice'),function(index){
						if ($(this).isOnScreen())
						{
							if ( $(this).attr('data-on-screen') == '0' )
							{
								$(this).attr('data-on-screen','1');
								$(this).find('.studioserviceleft').animate({left:0},1000);
								$(this).find('.studioserviceright').animate({left:0},1000);
							}
						}
						else
						{
							if ( $(this).attr('data-on-screen') == '1' )
							{
								$(this).attr('data-on-screen','0');
								var studioserviceleft = $(this).find('.studioserviceleft');
								$(studioserviceleft).css('left',parseInt($(studioserviceleft).attr('data-left')));
								var studioserviceright = $(this).find('.studioserviceright');
								$(studioserviceright).css('left',parseInt($(studioserviceright).attr('data-left')));
							}
						}
					});
				}				
				
			</script>
			
@endsection


		
		