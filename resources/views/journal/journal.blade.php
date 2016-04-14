<?php
use \App\Models\Inventory;
?>

@extends('layout/default')

@section('main')
			<div class="spacer20"></div>
			
			<h3>{{ languages('ANNOUNCEMENTS', 'ANNONCEMENTS') }}</h3>
			
			<div class="spacer20"></div>
			
			<div class="journal" style="height:110px;">
				<div style="height:100px; width:100%;">
					<img style="height:100px; width:100px; float:left; margin-left:20px; margin-right:20px;" src="images/icon_announcements_orange.png">
					<div>{{ languages($Announcement->announcement, $Announcement->announcement_fr) }}</div>
					<div>Published on: {{ $Announcement->created_at }}</div>
				</div>
			</div>
			
			<div class="spacer10"></div>
			<hr>
			<div class="spacer20"></div>
			
			<h3><a href="">EDITORIALS</a></h3>
			<div class="journal" style="height:110px;">
				<div style="height:100px; width:100%;">
					<img style="height:100px; width:100px; float:left; margin-left:20px; margin-right:20px;" src="images/icon_announcements_orange.png">
					<div>{{ languages($Editorial->title, $Editorial->title_fr) }}</div>
					<div>Published on: {{ $Editorial->created_at }}</div>
				</div>
			</div>
			
			<div class="spacer10"></div>
			<hr>
			<div class="spacer20"></div>
			
			<h3><a href="">EVENTS</a></h3>
			<div class="journal" style="height:110px;">
				<div style="height:100px; width:100%;">
					<img style="height:100px; width:100px; float:left; margin-left:20px; margin-right:20px;" src="images/icon_announcements_orange.png">
					<div>{{ languages($Event->title, $Event->title_fr) }}</div>
					<div>Published on: {{ $Event->created_at }}</div>
				</div>
			</div>
			
			<div class="spacer20"></div>
@endsection