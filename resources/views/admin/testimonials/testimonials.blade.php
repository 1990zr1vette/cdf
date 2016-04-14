@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/testimonials/create">
					<button type="submit" class="btn btn-primary">ADD TESTIMONIAL</button>
				</a>
			</div>
			
@foreach($Testimonials as $Testimonial)
			<div class="productrow row60">
				
				<span class="">{{ $Testimonial->title }}</span>
				
				<span class="button">
					<a href="admin/testimonials/{{ $Testimonial->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach

			<div class="spacer40"></div>
			

@endsection