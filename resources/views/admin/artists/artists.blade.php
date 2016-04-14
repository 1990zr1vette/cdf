@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/artists/create">
					<button type="submit" class="btn btn-primary">ADD ARTIST</button>
				</a>
			</div>
			
@foreach($Artists as $Artist)
			<div class="productrow row60">
				
				<span class="">{{ $Artist->artist }}</span>
				
				<span class="button">
					<a href="admin/artists/{{ $Artist->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach

			<div class="spacer40"></div>
			

@endsection