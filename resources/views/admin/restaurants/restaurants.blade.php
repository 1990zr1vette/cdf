@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/restaurants/create">
					<button type="submit" class="btn btn-primary">ADD RESTAURANT</button>
				</a>
			</div>
			
@foreach($Restaurants as $Restaurant)
			<div class="productrow row60">
				
				<span class="">{{ $Restaurant->restaurant }}</span>
				
				<span class="button">
					<a href="admin/restaurants/{{ $Restaurant->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach

			<div class="spacer40"></div>
			

@endsection