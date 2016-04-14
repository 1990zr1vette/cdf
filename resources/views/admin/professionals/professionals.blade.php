@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/professionals/create">
					<button type="submit" class="btn btn-primary">ADD PROFESSIONAL</button>
				</a>
			</div>
			
@foreach($Professionals as $Professional)
			<div class="productrow row60">
				
				<span class="">{{ $Professional->professional }}</span>
				
				<span class="button">
					<a href="admin/professionals/{{ $Professional->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach

			<div class="spacer40"></div>
			

@endsection