<?php
use \App\Models\Inventory;
?>

@extends('layout/default')

@section('main')
			<h2>
				{{ languages($Product->product, $Product->product_fr) }} - {{ languages($Type->type, $Type->type_fr) }}
			</h2>
			
			<div class="spacer20"></div>
			
@foreach(Inventory::with('Brand')->where('product_id', $Product->id)->where('type_id', $Type->id)->get() as $Item)

			<div class="item">
				<div class="spacer20"></div>
				<span class="img">
					<img src="images/{{ $Item->image }}" />
				</span>
				<span class="info">
					<h3><span>{{ $Item->Brand->brand }} - {{ $Item->model }}</span></h3>
					<div class="spacer10"></div>
					<div style="white-space:pre-wrap;">{{ languages($Item->description, $Item->description_fr) }}</div>
				</span>
			</div>
			<div class="spacer10"></div>
@endforeach
			
@endsection