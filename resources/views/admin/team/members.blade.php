@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/team/create">
					<button type="submit" class="btn btn-primary">ADD MEMBER</button>
				</a>
			</div>
			
@foreach($Members as $Member)
			<div class="productrow row60">
				<span class="">{{ $Member->first_name }} {{ $Member->last_name }}</span>
				
				<span class="button">
					<a href="admin/team/{{ $Member->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
			</div>
			<div class="spacer20"></div>
@endforeach
			
@endsection