@extends('layout/default')

@section('main')
			<div id="banner">
				<img src="images/cdf-banners-journal_featuresarticles.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle">{{ languages('Features & Articles', 'Éditoriaux et articles') }}</h1>
			</div>
			
			<div class="spacer40"></div>
			
@foreach($Editorials as $Editorial)			
			<div class="article">
				<div class="spacer20"></div>
				<h3 class="upper">{{ languages($Editorial->title, $Editorial->title_fr) }}</h3>
				<h3>{{ publishedOn($Editorial->created_at) }}</h3>
				<div class="spacer20"></div>
				
				<div class="articleimg">
					<img src="images/{{ $Editorial->image }}" />
				</div>
				
				<div class="articleinfo">{{ languages($Editorial->editorial, $Editorial->editorial_fr) }}</div>				
			</div>
			<div class="spacer20"></div>
@endforeach
			
			<div class="spacer40"></div>
			
			<script src="js/banner.js" type="text/javascript"></script>			
			<script src="js/editorials.js" type="text/javascript"></script>			
@endsection