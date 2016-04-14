@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/announcements/create">
					<button type="submit" class="btn btn-primary">ADD ANNOUNCEMENT</button>
				</a>
			</div>
			
@foreach($Announcements as $Announcement)
			<div class="productrow row96">
				<span class="">{{ $Announcement->announcement }}</span>
				
				<span class="button">
					<a href="admin/announcements/{{ $Announcement->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach
						
@endsection