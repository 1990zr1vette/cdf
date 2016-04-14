@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/boutiques/create">
					<button type="submit" class="btn btn-primary">ADD BOUTIQUE</button>
				</a>
			</div>
			
@foreach($Boutiques as $Boutique)
			<div class="productrow row60">
				
				<span class="">{{ $Boutique->boutique }}</span>
				
				<span class="button">
					<a href="admin/boutiques/{{ $Boutique->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
				
			</div>
@endforeach

			<div class="spacer40"></div>
			

@endsection