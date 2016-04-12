@extends('layout/default')

@section('main')

			<div id="banner">
				<img src="images/cdf-banners-about_experience.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle" style="position:relative; z-index:3; color:#fff;">Culture & Quality</h1>
			</div>
			
			<script src="js/banner.js" type="text/javascript"></script>	
			
			<div class="spacer20"></div>
			
			<div style="width:calc(92% - 40px); margin:0 auto; padding:20px; background-color:#fff; border:1px solid #cfcfcf; border-radius:15px;">
@if (Session::get('lang') == 'EN')			
				We are proud to share a short list of our clients. Our expertise crosses over from personal into many professional domains. CDF is known for delivering particular systems to all of our associates. We take an intense interest in providing high quality, practical and aesthetic solutions in every install. Sound and image, multi-media installations require vision and understanding from professionals who are sensitive to your goals and desires. CDF is able to bring art and technology together for your personal and professional systems.
@else
				Nous sommes fiers de partager avec vous une liste de quelques-uns de nos clients. Notre savoir-faire s’étend aussi bien aux particuliers qu’à de nombreux professionnels. CDF est réputé pour fournir des systèmes particuliers à tous ses associés. Lors de chaque installation, nous veillons à vous fournir des solutions pratiques et esthétiques, de la plus haute qualité. Les installations multimédias, de son et d’image, exigent l’intervention de professionnels compétents et doués d’une certaine vision, à l’écoute de vos objectifs et de vos envies. CDF allie art et technologie dans tous vos systèmes personnels et professionnels.
@endif	
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>

			<div class="experience">
				<div class="spacer20"></div>
				<div class="experienceleft">
					<img src="images/icon_experience_artists.png" />
					<div class="experienceinfo">
						<h3 class="upper left">{{ languages('ARTISTS', 'Artistes') }}</h3>
						<div class="spacer10"></div>
						<div><span>></span><a target="_blank" href="http://www.eight-and-a-half.com/">Eight and a half</a></div>
						<div><span>></span><a target="_blank" href="http://www.dawntylerwatson.com/">Dawn Tyler Watson</a></div>
						<div><span>></span><a target="_blank" href="http://www.arrq.qc.ca/html/TOUS/index.php">Association des realisateurs du Quebec</a></div>
						<div><span>></span><a target="_blank" href="http://www.boucanebleue.com/">Daniel Boucher</a></div>
						<div><span>></span><a target="_blank" href="http://www.imdb.com/name/nm0885249/">Jean Marc Vallée</a></div>
						<div><span>></span><a target="_blank" href="http://www.thestills.net/2006/main.html">The Stills</a></div>
						<div><span>></span><a target="_blank" href="http://www.imdb.com/name/nm2605386/">Marc-Andre Lavoie</a></div>
						<div><span>></span><a target="_blank" href="http://www.epidemic.net/geogb/art/lll/index.html">Edouard Lock</a></div>
						<div><span>></span><a target="_blank" href="http://www.tiga.ca/">Tiga</a></div>
						<div><span>></span><a target="_blank" href="http://www.simpleplan.com/">Simple Plan</a></div>						
					</div>
				</div>
				<div class="experienceright">
					<img src="images/icon_experience_restaurants.png" />				
					<div class="experienceinfo">
						<h3 class="upper left">{{ languages('Restaurants & Bars', 'Bars et restaurants') }}</h3>
						<div class="spacer10"></div>
						<div><span>></span><a href="http://www.bottega.ca/" target="_blank">Bottega Pizzeria</a></div>
						<div><span>></span><a href="http://www.rufusrockhead.com/" target="_blank">Rufus and Rockhead</a></div>
						<div><span>></span><a href="http://www.oliveetgourmando.com/index_flash.cfm" target="_blank">Olive et Gourmando</a></div>
						<div><span>></span><a href="http://www.leclubchasseetpeche.com/" target="_blank">Le Club Chasse et Peche</a></div>
						<div><span>></span><a href="http://www.saka-ba.com/" target="_blank">Saka Ba</a></div>
						<div><span>></span><a href="http://www.lefilet.ca/" target="_blank">Le filet</a></div>
						<div><span>></span><a href="http://crownsalts.com/lebremner/" target="_blank">Le Bremner</a></div>
						<div>Il Pagliaccio</div>
						<div><span>></span><a href="http://www.lechienfumant.com/#/home" target="_blank">Le Chien fumant</a></div>
						<div><span>></span><a href="http://www.espresso-mali.com/" target="_blank">Cafe Mali</a></div>
						<div><span>></span><a href="http://www.barroco.ca/" target="_blank">Barroco</a></div>
					</div>
				</div>
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>

			<div class="experience">
				<div class="spacer20"></div>
				<div class="experienceleft">
					<img src="images/icon_experience_boutiques.png" />
					<div class="experienceinfo">
						<h3 class="upper left">{{ languages('Boutiques & Offices etc...', 'Boutiques, bureaux, etc.') }}</h3>
						<div class="spacer10"></div>
						<div><span>></span><a href="http://www.michelbrisson.com/" target="_blank">Boutique Michel Brisson</a></div>
						<div><span>></span><a href="http://www.botabota.ca/" target="_blank">Bota Bota</a></div>
						<div><span>></span><a href="http://www.lechateau.com/en/index" target="_blank">Le Chateau</a></div>
						<div><span>></span><a href="http://ntdapparel.com/" target="_blank">NTD Apparel</a></div>
						<div><span>></span><a href="http://www.lorangermarcoux.com/fr/notre_societe.php" target="_blank">Loranger Marcoux</a></div>
						<div><span>></span><a href="http://www.steelwerks.ca/" target="_blank">Steelwerks</a></div>						
					</div>
				</div>
				<div class="experienceright">
					<img src="images/icon_experience_professionals.png" />				
					<div class="experienceinfo">
						<h3 class="upper left">{{ languages('Professionals', 'Professionnels') }}</h3>
						<div class="spacer10"></div>
						<div><span>></span><a href="http://www.planetstudios.ca/" target="_blank">Planete Studios</a></div>
						<div><span>></span><a href="http://www.karisma.ca/" target="_blank">Studio Karisma</a></div>
						<div><span>></span><a href="http://www.lamajeure.com/" target="_blank">Studio La Majeure</a></span></div>
						<div><span>></span><a href="http://www.ahuntsicmusique.com/" target="_blank">Centre Musicale Ahuntsic</a></span></div>
					</div>
				</div>
			</div>
			
			<div class="spacer40"></div>
			
			<script>
				var experienceWidth = $('.experience').eq(0).width();
				var marginLeft = ($(window).width() - experienceWidth) / 2;
				$.each($('.experience'),function(){
					if ($(this).find('.experienceleft').height() > $(this).find('.experienceright').height()){$(this).css('height', $(this).find('.experienceleft').height() + 40);}else{$(this).css('height', $(this).find('.experienceright').height() + 40);}	
					$(this).find('.experienceleft').css('left', '-' + ((experienceWidth - marginLeft) / 2) + 'px').attr('data-left', '-' + ((experienceWidth - marginLeft) / 2));
					$(this).find('.experienceright').css('left',(experienceWidth / 2) + 'px').attr('data-left', (experienceWidth / 2) + 'px');
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
					$.each($('.experience'),function(index){
						if ($(this).isOnScreen())
						{
							if ( $(this).attr('data-on-screen') == '0' )
							{
								$(this).attr('data-on-screen','1');
								$(this).find('.experienceleft').animate({left:0},1000);
								$(this).find('.experienceright').animate({left:0},1000);
							}
						}
						else
						{
							if ( $(this).attr('data-on-screen') == '1' )
							{
								$(this).attr('data-on-screen','0');
								var experienceleft = $(this).find('.experienceleft');
								$(experienceleft).css('left',parseInt($(experienceleft).attr('data-left')));
								var experienceright = $(this).find('.experienceright');
								$(experienceright).css('left',parseInt($(experienceright).attr('data-left')));
							}
						}
					});
				}				
			</script>			
@endsection


		
		