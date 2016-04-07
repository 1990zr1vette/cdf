@extends('layout/default')

@section('main')

			<div id="banner">
				<img src="images/cdf-banners-about_experience.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="culturetitle" style="position:relative; z-index:3; color:#fff;">Culture & Quality</h1>
			</div>
			
			<script>
				$('.culturetitle').css('top','-' + (($('#banner').height() + $('.culturetitle').height()) / 2) + 'px');
			</script>
			
			
@endsection


		
		