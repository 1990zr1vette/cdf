@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/brands/{{ $Brand->id }}/products/{{ $Product->id }}/inventory/create">
					<button class="btn btn-primary" type="submit">ADD ITEM</button>
				</a>
			</div>
			
			<fieldset>
				<legend align="center">{{ $Brand->brand }} - {{ $Product->product }}</legend>
				
				<div class="spacer20"></div>
				
@foreach($InventoryItems as $InventoryItem)
				<div class="fieldsetrow">
					{{ $InventoryItem->model }}
					<span class="button">
						<a href="admin/brands/{{ $Brand->id }}/products/{{ $Product->id }}/inventory/{{ $InventoryItem->id }}/edit">
							<button class="btn btn-primary">EDIT</button>
						</a>
					</span>
				</div>
@endforeach				

			</fieldset> 			

@endsection