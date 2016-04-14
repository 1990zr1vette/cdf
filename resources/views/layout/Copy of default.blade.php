<?php
use \App\Models\Product;
$Products = Product::getProducts();
//$Products = Product::where('active',1)->get();
?>
<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Coup de Foudre</title>
		
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		
		<meta name="description" content="{{ $description }}" />
		<meta name="keywords" content="{{ $keywords }}" />
		
		<meta property="fb:page_id" content="" />
		<meta property="fb:app_id" content="" />		
		<meta property="og:site_name" content="" />
		<meta property="og:title" content="" />
		<meta property="og:image" content="" />
		<meta property="og:url" content="" />
		<meta property="og:description" content="" />
	
		<base href="{{URL::to('')}}/" />
		
		<link rel="stylesheet" href="css/style.css">

		<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
		
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<header>
			<nav id="topnav">
				<ul>
					<li class="topli">
						<a href="{{ languages(HOME, HOME_FR) }}">{{ languages(HOME, HOME_FR) }}</a>
					</li>
					<li class="topli">
						<a href="{{ languages(BRANDS, BRANDS_FR) }}">{{ languages(BRANDS, BRANDS_FR) }}</a>
					</li>					
					<li class="topli">
						<a href="{{ languages(JOURNAL, JOURNAL_FR) }}">JOURNAL</a>
						<ul class="submenu">
							<li>
								<a href="{{ languages(ANNOUNCEMENTSURL, ANNOUNCEMENTSURL_FR) }}">
									{{ languages(ANNOUNCEMENTS, ANNOUNCEMENTS_FR) }}
								</a>
							</li>
							<li>
								<a href="{{ languages(EVENTSURL, EVENTSURL_FR) }}">
									{{ languages(EVENTS, EVENTS_FR) }}
								</a>
							</li>
							<li>
								<a href="{{ languages(EDITORIALSURL, EDITORIALSURL_FR) }}">
									{{ languages(EDITORIALS, EDITORIALS_FR) }}
								</a>
							</li>							

						</ul>
					</li>
					<li class="topli">
						<a href="{{ languages(ABOUTUS, ABOUTUS_FR) }}">
							{{ languages('ABOUT US', 'À PROPOS DE NOUS') }}
						</a>
						<ul class="submenu">
							<li>
								<a href="{{ languages(CULTUREURL, CULTUREURL_FR) }}">
									{{ languages(CULTURE, CULTURE_FR) }}
								</a>
							</li>
							<li>
								<a href="{{ languages(EXPERIENCEURL, EXPERIENCEURL_FR) }}">
									{{ languages('Experience','Expérience') }}
								</a>
							</li>
							<li>
								<a href="{{ languages(STUDIOSRERVICESURL, STUDIOSRERVICESURL_FR) }}">
									{{ languages('Studio and Services','Studio et Services') }}
								</a>
							</li>
							<li>
								<a href="{{ languages(TEAMURL, TEAMURL_FR) }}">
									{{ languages('Team','Équipe') }}
								</a>
							</li>
						</ul>
					</li>
					<li class="topli">
						<a href="{{ languages(USED, USED_FR) }}">{{ languages('USED','UTILISÉ') }}</a>
					</li>					
					<li class="topli">
						<a href="{{ $urlol }}">{{ languages('FRANCAIS','ENGLISH') }}</a>
					</li>
				</ul>
			</nav>
			
			<div id="cdf">			
				<div id="logo"><img src="images/logo.png"></div>				
				<div id="companyname">Coup de Foudre</div>				
				<div id="cdfinfo">					
					<p>6644 Clark</p>					
					<p>Mtl, Qc H2S-3E7</p>					
					<p>(514) 788-5066</p>									
				</div>						
			</div>
			
			<nav id="bottomnav">
				<ul>				
@foreach($Products as $Product)
					<li class="bottomli">
						<a href="{{ $Product->href }}">
							{{ languages($Product->product,$Product->product_fr) }}
						</a>
							<ul class="submenu">
@foreach ($Product->Types as $Type)
								<li>
									<a href="{{ $Type->href }}">
										{{ languages($Type->type, $Type->type_fr) }}
									</a>
								</li>
@endforeach
							</ul>						
					</li>
@endforeach					
				</ul>
			</nav>
		</header>
		
		<script>
			$('.topli').css('width',(100 / $('.topli').size()) + '%');
			$('.bottomli').css('width',(100 / $('.bottomli').size()) + '%');
			$.each($('.submenu'),function(){$(this).css('width',$(this).parent().width());});			
			$('.bottomli, .topli').hover(function(){$(this).find('.submenu').css('display','block');},function(){$(this).find('.submenu').css('display','none');});
		</script>
		
		<main>
			@yield('main')
		</main>
		
		<footer style="color:#fff;">
			<div class="spacer20"></div>
			
			<h2>
				<a href="">
					{{ languages("Subscribe to our newsletter, stay connected to events and promotions reserved for our clients", "Abonnez-vous à notre lettre d'information pour être tenu au courant de l'actualité, bénéficiez des offres et d'invitations à des évènements réservées à nos abonnés.") }}
				</a>
			</h2>
			
			<div class="spacer20"></div>
			
			<div style="height:425px; width:100%;">
			
				<div style="height:1px; width:90%; margin:0 auto; background-color:#fff;"></div>
				
				<div class="spacer20"></div>
				
				<div style="width:90%; margin:0 auto;">
				
					<div class="footercolumn">
						<h3>Coup De Foudre</h3>
						<span>
							<a href="{{ languages(CULTUREURL, CULTUREURL_FR) }}">
								{{ languages('Culture', 'Culture') }}
							</a>
						</span>
						<span>
							<a href="{{ languages(EXPERIENCEURL, EXPERIENCEURL_FR) }}">
								{{ languages('Experience', 'Expérience') }}
							</a>
						</span>
						<span>
							<a href="{{ languages(STUDIOSRERVICESURL, STUDIOSRERVICESURL_FR) }}">
								{{ languages('Studio & Services', 'Studio et Services') }}
							</a>
						</span>
						<span>
							<a href="{{ languages(TEAMURL, TEAMURL_FR) }}">
								{{ languages('Team', 'Équipe') }}
							</a>
						</span>
					</div>
					
					<div class="footercolumn">
						<h3>{{ languages('Products', 'Produits') }}</h3>
@foreach($Products as $Product)
						<span>
							<a href="{{ $Product->href }}">
								{{ languages($Product->product, $Product->product_fr) }}
							</a>
						</span>
@endforeach
					</div>
					<div class="footercolumn">
						<h3>Journal</h3>
						<span>
							<a href="{{ languages(ANNOUNCEMENTSURL, ANNOUNCEMENTSURL_FR) }}">
								{{ languages(ANNOUNCEMENTS, ANNOUNCEMENTS_FR) }}
							</a>
						</span>
						<span>
							<a href="{{ languages(EVENTSURL, EVENTSURL_FR) }}">
								{{ languages(EVENTS, EVENTS_FR) }}
							</a>
						</span>
						<span>
							<a href="{{ languages(EDITORIALSURL, EDITORIALSURL_FR) }}">
								{{ languages(EDITORIALS, EDITORIALS_FR) }}
							</a>						
						</span>
						<span></span>
						<h3>{{ languages('Contact Us', 'Nous contacter') }}</h3>
						<span>
							<a href="">
								{{ languages('General Inquiry', 'Demande de renseignement') }}
							</a>
						</span>
						<span>
							<a href="">
								{{ languages('Submit a Review', 'Envoyer une critique') }}
							</a>
						</span>
						<span>
							<a href="">
								{{ languages('Book a Consultation', 'Réserver une consultation') }}
							</a>
						</span>
					</div>
					<div class="footercolumn">
						<h3><a id="findusbutton" href="javascript:void(0);">{{ languages('Find Us', 'Nous trouver') }}</a></h3>
						<span>6644 Clark, Montreal</span>
						<span>Quebec H2S-3E7</span>
						<span>514-788-5066</span>						
					</div>
					<div class="footercolumn">
						<h3>{{ languages('Store Hours' , 'Heures d\'ouverture') }}</h3>
                        <span>{{ languages('Monday' , 'Lundi') }}</span>
						<span>{{ languages('Closed' , 'Fermé') }}</span>
						<div class="spacer10"></div>
						<span>{{ languages('Tuesday - Wednesday' , 'Mardi - Mercredi') }}</span>
						<span>{{ languages('11 am - 5 pm' , '11h - 17h') }}</span>
						<div class="spacer10"></div>
						<span>{{ languages('Thursday - Friday' , 'Jeudi - Vendredi') }}</span>
						<span>{{ languages('10 am - 8 pm' , '10h - 20h') }}</span>								
						<div class="spacer10"></div>
						<span>{{ languages('Saturday' , 'Samedi') }}</span>
						<span>{{ languages('10 am - 5 pm' , '10h - 17h') }}</span>
						<div class="spacer10"></div>
						<span>{{ languages('Sunday' , 'Dimanche') }}</span>
						<span>{{ languages('12 pm - 5 pm' , '12h - 17h') }}</span>
					</div>
					<div class="footercolumn" style="text-align:right;">
						<a target="_blank" href="https://www.facebook.com/coupdefoudre.montreal">
							<img class="socialimg" src="images/social_facebook.png" />
						</a>
						<a target="_blank" href="https://www.youtube.com/user/cdfaudio">
							<img class="socialimg" src="images/social_youtube.png" />
						</a>
						<a target="_blank" href="https://instagram.com/cdfaudio/">
							<img class="socialimg" src="images/social_instagram.png" />
						</a>
						<span>© 2016 CDFAudio</span>
					</div>				
					
				</div>
					
			</div>
		</footer>

		<div id="findus">
			<div class="close">
				<span id="close">X</span>
			</div>
			
			<div style="width:100%; text-align:center;">6644 Clark, Montreal Quebec H2S-3E7 514-788-5066</div>
			<div class="spacer20"></div>
			
			<div id="map" style="height:400px; width:600px; margin:0 auto; border:1px solid #cfcfcf;"></div>
			
			<script>
				function initMap(){
					var myLatLng = {lat:45.531103, lng:-73.612506};
					var map = new google.maps.Map(document.getElementById('map'),{zoom:16,center:myLatLng});
					var marker = new google.maps.Marker({position:myLatLng, map:map, title:'Hello World!'});
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
			
			<div class="spacer20"></div>
		</div>
		
		<script>
		
			$().css()
			$('#findus').attr('data-height', $('#findus').height());
			$('#findus').attr('data-width', $('#findus').width());
			$('#findus').css('height', 0);
			$('#findus').css('width', 0);

			
			$('#findusbutton').click(function(){
				$('header').css('opacity', 0.1);
				$('main').css('opacity', 0.1);
				$('footer').css('opacity', 0.1);
				
				$('#findus').css('top', $(document).scrollTop() + 100);
				$('#findus').css('height', parseInt($('#findus').attr('data-height')));
				$('#findus').css('width', parseInt($('#findus').attr('data-width')));
				
				$('#findus').animate({opacity:1}, 2000);
			});

			$('#close').click(function(){
				$('header').css('opacity', 1);
				$('main').css('opacity', 1);
				$('footer').css('opacity', 1);
				
				$('#findus').css('height', 0);
				$('#findus').css('width', 0);
				$('#findus').css('opacity', 0);
			});
			
			setFooter();
			
			function setFooter()
			{
				$('footer').css('top',$('main').offset().top + $('main').height());
			}
		</script>

		
	</body>
	
</html>

