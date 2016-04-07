@extends('layout/default')

@section('main')

			<h3>{{ $Brand->brand }} - {{ languages($Product->product, $Product->product_fr) }}</h3>

			<div class="spacer20"></div>
			
@foreach($InventoryItems as $InventoryItem)
			<div class="item">
				<div class="spacer20"></div>
				<span class="img">
					<img src="images/{{ $InventoryItem->image }}" />
				</span>	
				<span class="info">
					<h3><span>{{ $Brand->brand }} {{ $InventoryItem->model }}</span></h3>
					<div class="spacer10"></div>
					<div style="white-space:pre-wrap;">{{ languages($InventoryItem->description, $InventoryItem->description_fr) }}</div>
				</span>
			</div>
			<div class="spacer10"></div>
@endforeach	
			
@endsection

			<div class="spacer40"></div>