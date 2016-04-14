@extends('layout/default')

@section('main')
			<div style="height:500px; width:100%; overflow:hidden;">
				<img src="images/cdf-banners-about_team.jpg" />
				<div style="height:500px; width:100%;" class="banner_overlay"></div>
			</div>
			
			<fieldset id="teamconnect">
				<legend style="text-transform:uppercase;" align="center">{{ languages('OUR TEAM', 'Notre équipe') }}</legend>
				<div class="spacer20"></div>
				<p class="topp">
@if (Session::get('lang') == 'EN')				
					We are skilled professionals dedicated to our fields of interest;
					<br />
					music and film enthusiasts who would like to share 
					<br />
					our passion with you.
@else					
					Nous sommes passionnés de musique et de film. Les relations  
					<br />
					que nous entretenons avec nos clients nous 
					<br />
					tiennent très à cœur.
@endif					
				</p>
				<div class="spacer20"></div>
				<p class="bottomp">
					<a target="_blank" style="color:#fff;" href="https://www.facebook.com/coupdefoudre.montreal">
						<img src="images/social_facebook.png" />
						<span>
							{{ languages('CONNECT ON FACEBOOK', 'Suivez-nous sur facebook') }}
						</span>
					</a>
				</p>				
			</fieldset>
			
			<div id="info" class="spacer20"></div>
			
@foreach($Members as $Member)
			<div class="memberColumn">
				<div class="member">
					<img class="memberimg" src="images/{{ $Member->image }}" />
					<div class="membername">{{ $Member->first_name }}</div>
					<div class="details">
						<div class="memberfullname"><h3>{{ $Member->first_name }} {{ $Member->last_name }}</h3></div>
						<div class="position"><h4>{{ languages($Member->position, $Member->position_fr) }}</div>
						<div class="description">{{ languages($Member->description, $Member->description_fr) }}</div>
					</div>
					<span class="overlay"></span>
				</div>
			</div>
@endforeach

@foreach($Members as $Member)
			<div class="memberColumn">
				<div class="member">
					<img class="memberimg" src="images/{{ $Member->image }}" />
					<div class="membername">{{ $Member->first_name }}</div>
					<div class="details">
						<div class="memberfullname"><h3>{{ $Member->first_name }} {{ $Member->last_name }}</h3></div>
						<div class="position"><h4><h4>{{ languages($Member->position, $Member->position_fr) }}</h4></h4></div>
						<div class="description">{{ languages($Member->description, $Member->description_fr) }}</div>
					</div>
					<span class="overlay"></span>
				</div>
			</div>
@endforeach

@foreach($Members as $Member)
			<div class="memberColumn">
				<div class="member">
					<img class="memberimg" src="images/{{ $Member->image }}" />
					<div class="membername">{{ $Member->first_name }}</div>
					<div class="details">
						<div class="memberfullname"><h3>{{ $Member->first_name }} {{ $Member->last_name }}</h3></div>
						<div class="position"><h4><h4>{{ languages($Member->position, $Member->position_fr) }}</h4></h4></div>
						<div class="description">{{ languages($Member->description, $Member->description_fr) }}</div>
					</div>
					<span class="overlay"></span>
				</div>
			</div>
@endforeach

@foreach($Members as $Member)
			<div class="memberColumn">
				<div class="member">
					<img class="memberimg" src="images/{{ $Member->image }}" />
					<div class="membername">{{ $Member->first_name }}</div>
					<div class="details">
						<div class="memberfullname"><h3>{{ $Member->first_name }} {{ $Member->last_name }}</h3></div>
						<div class="position"><h4><h4>{{ languages($Member->position, $Member->position_fr) }}</h4></h4></div>
						<div class="description">{{ languages($Member->description, $Member->description_fr) }}</div>
					</div>
					<span class="overlay"></span>
				</div>
			</div>
@endforeach

			<div class="spacer20"></div>
			
			<script>
				var memberHeight = $('.member').eq(0).height();
				var memberWidth = $('.member').eq(0).width();
				var marginLeft = $('.member').eq(0).offset().left;
				var currentRow = 9999;
				
				$.fn.wrapEvery = function(cLen, wrapperEl){while (this.length ){$( this.splice(0, cLen) ).wrapAll( wrapperEl );}};	
			
				$('.memberColumn').wrapEvery(3, '<div class="memberRow">');
				
				$.each($('.memberRow'), function(index){$(this).find('.member').attr('data-row', index);});
				
				$.each($('.memberColumn'), function(index){$(this).attr('data-column', index % 3);});
				
				$('.member').hover(
					function()
					{
						$(this).find('.overlay').css('height',memberHeight).css('width',memberWidth);
						$(this).find('.overlay').css('top',$(this).position().top).css('left',$(this).position().left + marginLeft);
					},
					function()
					{
						$(this).find('.overlay').css('height',0).css('width',0);
					}
				);
				
				$('.member').click(function(){
					var member = $(this);					
					$(this).find('.overlay').animate({top:$(this).position().top + (memberHeight / 2), left:$(this).offset().left + (memberWidth / 2), height:0, width:0},250,function(){ showDescription(member);});
				});	

				function showDescription(member)
				{
					var memberColumn = $(member).parent().attr('data-column');
					
					if ($('#tempdiv').size() > 0)
					{
						$('footer').css('top', $('footer').offset().top - $('#tempdiv').height());
						$('#tempdiv').remove();
					}
					
					var html = $(member).find('.details').html();
					
					$(member).parent().parent().after('<div id="tempdiv" class="tempdiv' + memberColumn + '"></div>');
					
					$('#tempdiv').css('width',$(window).width() - (marginLeft * 2));
					$('#tempdiv').css('margin-left',marginLeft);
					$('#tempdiv').html(html);
					
					$('footer').css('top', $('footer').offset().top + $('#tempdiv').height());

					if ($(member).attr('data-row') != currentRow){$('html, body').animate({scrollTop: $(member).offset().top}, 250);}
					
					currentRow = $(member).attr('data-row');
				}
			</script>	
@endsection		