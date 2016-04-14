@extends('layout/default')

@section('main')

			<div id="banner">
				<img src="images/cdf-banners-about_experience.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle" style="position:relative; z-index:3; color:#fff;">{{ languages('Experience', 'Expérience') }}</h1>
			</div>
			
			<script src="js/banner.js" type="text/javascript"></script>	
			
			<div class="spacer20"></div>
			<hr>
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
				<div class="experiencecolumn left">
					<div class="spacer20"></div>
					<div class="experiencetitle">
						<img src="images/icon_experience_artists.png" />
						<span>{{ languages('ARTISTS', 'Artistes') }}</span>
					</div>
					<div class="experienceinfo">
						<div class="spacer10"></div>
@foreach($Artists as $Artist)
						<div>
@if ($Artist->website)						
							<a target="_blank" href="{{ $Artist->website }}">{{ $Artist->artist }}</a>
@else
							{{ $Artist->artist }}
@endif	
						</div>
@endforeach				
						<div></div>
					</div>
				</div>
				<div class="experiencecolumn right">
					<div class="spacer20"></div>
					<div class="experiencetitle">
						<img src="images/icon_experience_restaurants.png" />
						<span>{{ languages('Restaurants & Bars', 'Bars et restaurants') }}</span>
					</div>
					<div class="experienceinfo">
						<div class="spacer10"></div>
@foreach($Restaurants as $Restaurant)
						<div>
@if ($Restaurant->website)						
							<a target="_blank" href="{{ $Restaurant->website }}">{{ $Restaurant->restaurant }}</a>
@else
							{{ $Restaurant->restaurant }}
@endif	
						</div>
@endforeach				
						<div></div>
					</div>
				</div>
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<div class="experience">
				<div class="experiencecolumn left">
					<div class="spacer20"></div>
					<div class="experiencetitle">
						<img src="images/icon_experience_artists.png" />
						<span>{{ languages('Boutiques & Offices etc...', 'Boutiques, bureaux, etc.') }}</span>
					</div>
					<div class="experienceinfo">
						<div class="spacer10"></div>
@foreach($Boutiques as $Boutique)
						<div>
@if ($Boutique->website)						
							<a target="_blank" href="{{ $Boutique->website }}">{{ $Boutique->boutique }}</a>
@else
							{{ $Boutique->boutique }}
@endif	
						</div>
@endforeach			
						<div></div>
					</div>
				</div>
				<div class="experiencecolumn right">
					<div class="spacer20"></div>
					<div class="experiencetitle">
						<img src="images/icon_experience_restaurants.png" />
						<span>{{ languages('Professionals', 'Professionnels') }}</span>
					</div>
					<div class="experienceinfo">
						<div class="spacer10"></div>
@foreach($Professionals as $Professional)
						<div>
@if ($Professional->website)						
							<a target="_blank" href="{{ $Professional->website }}">{{ $Professional->professional }}</a>
@else
							{{ $Professional->professional }}
@endif	
						</div>
@endforeach					
						<div></div>
					</div>
				</div>
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>			

			<div class="spacer20"></div>

			<h3 class="upper">{{ languages('Testimonials', 'Témoignages') }}</h3>
			<h3><a id="testimonial" href="javascript:void(0);">{{ languages('Write Your Own Testimonials', 'Écrivez vos propres Témoignages') }}</a></h3>
			
			<div class="spacer20"></div>
			
@foreach ($Testimonials as $Testimonial)
				<div class="testimonial-column">
					<div class="spacer20"></div>
					<h3>{{ $Testimonial->title }}</h3>
					<div class="spacer10"></div>
					<span class="testimonial-span">{{ $Testimonial->testimonial }}</span>
				</div>
@endforeach

			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>	
	
			<script src="js/jquery.form.js" type="text/javascript"></script>
			
	

			<script>
				$(document).ready(function() { 
					$('#addtestimonialform').ajaxForm(function(response){
						alert(response);
					}); 
				});			
			
				$('#testimonial').click(function(){					
@if (Session::get('lang') == 'EN')
					window.location = "testimonials/addtestimonial";
@else
					window.location = "temoignages/ajoutetemoignage";
@endif
				});

				var animationSpeed = 1000;
				
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
				
				$.each($('.experience'), function(){
					
					$(this).find('.experiencecolumn.left').css('left','-' +  $(this).find('.experiencecolumn.left').width() + 'px');
					$(this).find('.experiencecolumn.right').css('left',$(this).find('.experiencecolumn.left').width() + 'px');
					$(this).attr('data-on-screen','0');
					
				});
				
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
								$(this).find('.experiencecolumn.left').animate({left:0},animationSpeed);
								$(this).find('.experiencecolumn.right').animate({left:0},animationSpeed);
							}
						}
						else
						{
							if ( $(this).attr('data-on-screen') == '1' )
							{
								$(this).attr('data-on-screen','0');
								$(this).find('.experiencecolumn.left').css('left','-' +  $(this).find('.experiencecolumn.left').width() + 'px');
								$(this).find('.experiencecolumn.right').css('left',$(this).find('.experiencecolumn.left').width() + 'px');								
							}
						}
					});
					
				}
				

				
				$.fn.wrapEvery = function(cLen, wrapperEl){while (this.length ){$( this.splice(0, cLen) ).wrapAll( wrapperEl );}};	
				$('.testimonial-column').wrapEvery(2, '<div class="testimonials">');
				$.each($('.experience'),function(){				
					var height = 0;					
					$.each($(this).find('.experiencecolumn'),function(index){
						if ($(this).height() > height)
						{
							height = $(this).height();
						}
					});
					$(this).css('height', height);
				});
				$.each($('.testimonials'),function(){
					$(this).attr('data-expanded', '0');
					$(this).attr('data-expanded-height', '0');
					$.each($(this).find('.testimonial-column'),function(index){
						var height = $(this).find('.testimonial-span').height();
						var difference = height - 100;
						$(this).attr('data-expand-height', difference);
						$(this).find('.testimonial-span').attr('data-expand-height', difference);
						$(this).find('.testimonial-span').css('height', '100px');
						if (height > 100)
						{
							$(this).append('<span for="' + index + '" data-expand-height="' + difference + '" data="0" class="moretag">[+] MORE</span>');
						}
						if (index == 0)
						{
							$(this).addClass('leftcolumn');
						}
						else
						{
							$(this).addClass('rightcolumn');
						}
					});
				});
				
				$('.moretag').click(function(){
					if ($(this).attr('data') == '0')
					{
						$(this).attr('data', '1');
						var html = $(this).html().replace('+','-').replace('MORE','LESS');
						$(this).html(html);
						var testimonials = $(this).parent().parent();
						$(testimonials).attr('data-expanded', parseInt($(testimonials).attr('data-expanded')) + 1);
						var testimonialsHeight = $(testimonials).height();
						var expandedHeight = parseInt($(testimonials).attr('data-expanded-height'));
						var span = $(this).parent().find('.testimonial-span');
						var footerTop = $('footer').offset().top;
						var expandHeight = 0;
						var expandHeight2 = 0;
						if (expandedHeight == 0)
						{
							expandHeight = parseInt($(this).attr('data-expand-height'));
							expandHeight2 = expandHeight;
							$(testimonials).attr('data-expanded-height', expandHeight);
						}
						else
						{
							expandHeight2 = parseInt($(this).attr('data-expand-height'));
							if (expandHeight2 > expandedHeight)
							{
								expandHeight = expandHeight2 - expandedHeight;
								$(testimonials).attr('data-expanded-height', expandHeight2);
							}
						}
						$(testimonials).animate({height:testimonialsHeight + expandHeight});
						$(span).animate({height:100 + expandHeight2});
						$('footer').animate({top:footerTop + expandHeight});
					}
					else
					{
						$(this).attr('data', '0');
						var html = $(this).html().replace('-','+').replace('LESS','MORE');
						$(this).html(html);
						var testimonials = $(this).parent().parent();
						var testimonialsHeight = $(testimonials).height();
						var dataExpandedHeight = $(testimonials).attr('data-expanded-height');
						var dataExpanded = $(testimonials).attr('data-expanded');						
						var expandHeight = parseInt($(this).attr('data-expand-height'));
						var footerTop = $('footer').offset().top;
						var span = $(this).parent().find('.testimonial-span');
						if (dataExpanded == 1)
						{
							$(testimonials).attr('data-expanded-height', '0');
							$(testimonials).attr('data-expanded', '0');
							$(testimonials).animate({height:testimonialsHeight - expandHeight});
							$('footer').animate({top:footerTop - expandHeight});
						}
						else
						{
							$(testimonials).attr('data-expanded', '1');
							if (expandHeight >= dataExpandedHeight)
							{
								if ($(this).attr('for') == '0')
									var expandHeight2 = expandHeight - parseInt($(testimonials).find('span.moretag[for=1]').attr('data-expand-height'));	
								else
									var expandHeight2 = expandHeight - parseInt($(testimonials).find('span.moretag[for=0]').attr('data-expand-height'));	
								$(testimonials).attr('data-expanded-height', expandHeight2);
								$(testimonials).animate({height:testimonialsHeight - expandHeight2});
								$('footer').animate({top:footerTop - expandHeight2});
							}
						}
						$(span).animate({height:100});
					}
				});
			</script>
			
@endsection
