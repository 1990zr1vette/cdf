<?php
use \App\Models\Product;
use \App\Models\Type;
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
				
@foreach(Product::where('active',1)->get() as $Product)
					<li class="bottomli">
						<a href="products/{{ fixSegment($Product->product, $Product->product_fr) }}/{{ $Product->id }}">{{ languages($Product->product,$Product->product_fr) }}</a>
						<ul class="submenu">
@foreach($Product->ProductTypes as $ProductType)
							<li>
								<a href="products/{{ fixSegment($Product->product, $Product->product_fr) }}/{{ fixSegment($ProductType->type, $ProductType->type_fr) }}/{{ $Product->id }}/{{ $ProductType->id }}">{{ languages($ProductType->type,$ProductType->type_fr) }}</a>
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
				<a href="">Subscribe to our newsletter, stay connected to events and promotions reserved for our clients</a>
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
								Culture
							</a>
						</span>
						<span>
							<a href="{{ languages(EXPERIENCEURL, EXPERIENCEURL_FR) }}">
								Experience
							</a>
						</span>
						<span>
							<a href="{{ languages(STUDIOSRERVICESURL, STUDIOSRERVICESURL_FR) }}">
								Studio & Services
							</a>
						</span>
						<span>
							<a href="{{ languages(TEAMURL, TEAMURL_FR) }}">
								Team
							</a>
						</span>
					</div>
					
					<div class="footercolumn">
						<h3>Products</h3>
@foreach(Product::where('active',1)->get() as $Product)
						<span>
							<a href="">
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
						<h3>Contact Us</h3>
						<span>
							<a href="">General Inquiry</a>
						</span>
						<span>
							<a href="">Submit a Review</a>
						</span>
						<span>
							<a href="">Book a Consultation</a>
						</span>
					</div>
					<div class="footercolumn">
						<h3><a id="findusbutton" href="javascript:void(0);">{{ languages('Find Us', 'Nous trouver') }}</a></h3>
						<span>6644 Clark, Montreal</span>
						<span>Quebec H2S-3E7</span>
						<span>514-788-5066</span>						
					</div>
					<div class="footercolumn">
						<h3>Store Hours</h3>
                        <span>Monday</span>
						<span>Closed</span>
						<div class="spacer10"></div>
						<span>Tuesday - Wednesday</span>
						<span>11 am - 5 pm</span>
						<div class="spacer10"></div>
						<span>Thursday - Friday</span>
						<span>10 am - 8 pm</span>								
						<div class="spacer10"></div>
						<span>Saturday</span>
						<span>10 am - 5 pm</span>
						<div class="spacer10"></div>
						<span>Sunday</span>
						<span>12 pm - 5 pm</span>
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
					</div>				
					
				</div>
					
			</div>
		</footer>

		<div id="findus">
			<div class="close">
				<span id="close">X</span>
			</div>
		</div>
		
		<script>
		
			$('#findusbutton').click(function(){
				
				$('#findus').css('top', $(document).scrollTop() + 100 );
				
				$('#findus').fadeIn();
				
			});

			$('#close').click(function(){
				
				$('#findus').fadeOut();
			});
			
			setFooter();
			
			function setFooter()
			{
				$('footer').css('top',$('main').offset().top + $('main').height());
			}
		</script>

		
	</body>
	
</html>

