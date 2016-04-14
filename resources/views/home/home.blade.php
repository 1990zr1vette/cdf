@extends('layout/default')

@section('main')

			<div id="slider" style="overflow:hidden;">
				<img src="images/slider/slider1.jpg" />
				<img src="images/slider/slider2.jpg" />
				<img src="images/slider/slider3.jpg" />
				<img src="images/slider/slider4.jpg" />
				<div class="banner_overlay"></div>
			</div>			

			
			<div id="messages">
				<span class="messagetitle">COUP DE FOUDRE</span>
				<span class="message">The discerning be at ease... We see no reason to accept mediocrity.</span>
				<span class="message">Coup de foudre literally means clap of thunder, the expression is used to describe love at first sight.</span>
				<span class="message">We are a small boutique, owned by dedicated individuals, professionals with great skill and experience.</span>
				<span class="message">Being fiercely independent has allowed us to curate a selection of the world’s finest electronics and loudspeakers.</span>
			</div>			
			
			<script>
				var sliderHeight = $(window).height() - $('header').height() - 150;
				var sliderWidth = $(window).width();
				$('.banner_overlay').css('height',sliderHeight);
				$('#slider').css('height',sliderHeight).css('width',sliderWidth);
				$('#slider').find('img').css('height',sliderHeight).css('width',sliderWidth);				
				$('#messages').css('top',($('#slider').position().top + $('#slider').height() - $('#messages').height()) + 'px');				
				
				$.each($('#messages .message'),function(index){$(this).attr('data-left',$(this).position().left);});
				var messageHeight = $('#messages .message').eq(0).height();
				var messageLeft = $('#messages .message').eq(0).position().left;
				
				$.each($('#messages .message'),function(index){
					
					if (index != 0)
					{
						if (index % 3 == 0)
							$(this).attr('data-position','onbottom').css('top',$(this).height());
						else if (index % 3 == 1)
							$(this).attr('data-position','ontop').css('top','-' + $(this).height() + 'px');
						else if (index % 3 == 2)
							$(this).attr('data-position','right').css('left',$(window).width() + 'px');}
					
				});
					
				var slideNo = 0;
				var noOfSlides = $('#slider').find('img').size();				
				var interval = setInterval(function(){nextSlide();}, 5000);				
				var animationSpeed = 2000;
				function nextSlide()
				{
					var oldSlideNo = slideNo;
					if (slideNo < (noOfSlides - 1)){slideNo++;}else{slideNo = 0;}
					$('#slider').find('img').eq(oldSlideNo).animate({opacity:0},animationSpeed);					
					$('#slider').find('img').eq(slideNo).animate({opacity:1}, animationSpeed);
					var message = $('#messages').find('.message').eq(slideNo);
					var dataPosition = $(message).attr('data-position');
					if (dataPosition == 'ontop')
					{
						$('#messages').find('.message').eq(oldSlideNo).attr('data-position','ontop').animate({top:'-' + messageHeight + 'px'},animationSpeed / 2);
						$(message).animate({top:0},animationSpeed / 2);
					}
					else if (dataPosition == 'onbottom')
					{
						$('#messages').find('.message').eq(oldSlideNo).attr('data-position','onbottom').animate({top:messageHeight + 'px'},animationSpeed / 2);
						$(message).animate({top:0},animationSpeed / 2); 
					}
					else if (dataPosition == 'right')
					{
						var leftPos = parseInt($(message).attr('data-left'));
						$('#messages').find('.message').eq(oldSlideNo).attr('data-position','right').animate({left:$(window).width()},animationSpeed / 2);
						$(message).animate({left:leftPos},animationSpeed / 2); 
					}
				}
			</script>

			<section id="announcements">
				<div class="spacer85"></div>
				<img id="announcementsicon" src="images/icon_announcements.png" />
				<div style="float:left; margin-left:40px;">
					<p>Graham Loudspeakers - unique hand-made… keeping the BBC loudspeaker tradition alive.</p>
					<a href="{{ languages(ANNOUNCEMENTSURL, ANNOUNCEMENTSURL_FR) }}">{{ languages('SEE ALL ANNOUNCEMENTS', 'VOIR TOUS LES ANNONCES') }}</a>
				</div>
			</section>
			
			<div id="brands" style="min-height:20px; width:100%;">
				<div class="spacer20"></div>
				<h2>
					<a style='font-size:20px; color:rgb(34,34,34); font-family: "Unica One","Oswald","Arial Narrow",sans-serif; font-weight:normal; text-transform:uppercase;' href="{{ languages('brands','marques') }}">
						<h3>{{ languages('OUR BRANDS', 'NOS MARQUES') }}</h3>
					</a>
				</h2>
				<div class="spacer10"></div>
@foreach($Brands as $Brand)
				<span class="brandrow" style="display:inline-block; height:40px; width:25%; float:left; text-align:center;">
					<a href="{{ languages('brands','marques') }}/{{ fixSegment($Brand->brand) }}/{{ $Brand->id}}">
						{{ $Brand->brand }}
					</a>
				</span>				
@endforeach
			</div>
			
			<section id="editorial">
				<div class="spacer50"></div>
				<div id="editorialinfo">
					<h3>{{ languages('EDITORIAL', 'ARTICLE') }}</h3>
					<h2>{{ languages($Editorial->title, $Editorial->title_fr) }}</h2>
					<div class="editorialdate">{{ date('F j, Y', strtotime($Editorial->created_at)) }}</div>
					<p>{{ languages($Editorial->editorial, $Editorial->editorial_fr) }}</p>
					<div id="editorialreadmore">
						<a href="{{ languages(JOURNAL, JOURNAL_FR) }}/{{ languages('editorial', 'article') }}/{{ $Editorial->id }}">{{ languages('> READ MORE', '> EN SAVOIR PLUS') }}</a>
						&nbsp;&nbsp;
						<a href="{{ languages(JOURNAL, JOURNAL_FR) }}/{{ languages('editorials', 'articles') }}">{{ languages('> ALL ARTICLES', '> VOIR TOUS LES ARTICLES') }}</a>
					</div>
				</div>
				<div id="editorialimg">
					<img src="images/{{ $Editorial->image }}" />
				</div>								
			</section>
			
			<section id="event" style="height:500px;">
				<div class="spacer50"></div>
				<div id="eventimg">
					<img src="images/{{ $Event->image }}" />
				</div>				
				<div id="eventinfo">
					<h3 class="upper">{{ languages(EVENTS, EVENTS_FR) }}</h3>
					<h2>{{ languages($Event->title, $Event->title_fr) }}</h2>
					<div class="eventdate">{{ date('F j, Y', strtotime($Event->created_at)) }}</div>
					<p>{{ languages($Event->event, $Event->event_fr) }}</p>
					<div id="eventreadmore">
						<a href="{{ languages(JOURNAL, JOURNAL_FR) }}/{{ languages(rtrim(EVENTS, 's'), rtrim(replaceAccents(EVENTS_FR), 's')) }}/{{ $Event->id }}">{{ languages('> READ MORE', '> EN SAVOIR PLUS') }}</a>
						&nbsp;&nbsp;
						<a href="{{ languages(JOURNAL, JOURNAL_FR) }}/{{ languages(EVENTS, replaceAccents(EVENTS_FR)) }}">{{ languages('> ALL EVENTS', '> VOIR TOUS LES EVENEMENTS') }}</a>
					</div>
				</div>								
			</section>
			
			<script>
				var brandrows = Math.ceil($('.brandrow').size() / 4);
				$('#brands').css('height', ($('#brands').height() + (brandrows * $('.brandrow').height())) + 'px');
			</script>
			
@endsection