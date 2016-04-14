@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/events/create">
					<button type="submit" class="btn btn-primary">ADD EVENT</button>
				</a>
			</div>
			
@foreach($Events as $Event)
			<div class="productrow row96">
				<span class="">{{ $Event->title }}</span>
				
				<span class="button">
					<a href="admin/events/{{ $Event->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach
						
@endsection