@extends('layout/default')

@section('main')
			<div id="banner">
				<img src="images/cdf-banners-journal_announcements.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle">{{ languages(ANNOUNCEMENTS, ANNOUNCEMENTS_FR) }}</h1>
			</div>			
			
			<div class="spacer20"></div>
@foreach($Announcements as $Announcement)			
			<div class="announcement">
				<div class="spacer20"></div>
				<img class="announcementimage" src="images/icon_announcements_orange.png" />
				<div class="announcementinfo">
					<h4 class="upper left">
						{{ languages($Announcement->announcement, $Announcement->announcement_fr) }}
					</h4>
					<div class="spacer20"></div>
					<h5 class="left">
						{{ publishedOn($Announcement->created_at) }}
					</h5>
				</div>
				<div class="spacer20"></div>
			</div>
			<div class="spacer10"></div>
			<hr>
			<div class="spacer10"></div>
@endforeach
			<div class="spacer40"></div>
			<script src="js/banner.js" type="text/javascript"></script>
@endsection