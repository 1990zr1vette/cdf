@extends('layout/default')

@section('main')
			<div class="spacer20"></div>
			
@if (isset($Type))
			<h2 class="upper">
				{{ languages($Product->product, $Product->product_fr) }} - {{ languages($Type->type, $Type->type_fr) }}
			</h2>	
@elseif (isset($Brand))
			<h2 class="upper">
				{{ languages($Product->product, $Product->product_fr) }} - {{ $Brand->brand }}
			</h2>
@else	
			<h2 class="upper">
				{{ languages($Product->product, $Product->product_fr) }}
			</h2>
@endif

			<div class="dropdowndiv">
				<div class="spacer10"></div>
				<div id="dropdowndiv">
					<button id="brandbutton" class="btn btn-primary">
					{{ languages('Choose a Brand', 'Choisissez une Marque') }}
					</button>
					<div>
						<ul style="margin-top:1px;" id="brandselect" class="dropdown">
							<li for="{{ $Product->id }}" data="0">{{ languages('All Brands', 'Tous les marques') }}</li>
	@foreach($ProductBrands as $ProductBrand)
							<li for="{{ $Product->id }}" data="{{ $ProductBrand->brand->id }}">{{ $ProductBrand->brand->brand }}</li>
	@endforeach					
						</ul>
					</div>
				</div>
			</div>
			
			<script>
				var brandbuttonWidth = $('#brandbutton').width() + 
					parseInt($('#brandbutton').css('padding-left').replace('px', '')) + 
					parseInt($('#brandbutton').css('padding-right').replace('px', ''));
					
				if (brandbuttonWidth > $('#brandselect').width())
				{
					$('#dropdowndiv').css('width', brandbuttonWidth);
					$('#brandselect').css('width', brandbuttonWidth);
				}
				else
				{
					$('#dropdowndiv').css('width', $('#brandselect').width());
				}
				
				$('#brandbutton').hover(function(){$('#brandselect').css('visibility','visible');},function(){});
				$('#dropdowndiv').hover(function(){},function(){$('#brandselect').css('visibility','hidden');});
				
				$('#brandselect li').click(function(){
					var url = "{{ $brandurl }}" + 
						$(this).html().replace(/\ /g, '-').toLowerCase() + '/' + 
						$(this).attr('data'); 
					
					$(this).parent().css('display','none');
					
					window.location = url;
				});
			</script>
						
			<div class="spacer20"></div>
@foreach($InventoryItems as $Item)
			<div class="item">
				<div class="spacer20"></div>
				<div class="spacer10"></div>
				<span class="img">
					<img src="images/{{ $Item->image }}" />
				</span>
				<span class="info">					
					<h3><span>{{ $Item->brand }} - {{ $Item->model }}</span></h3>
					<div class="spacer10"></div>
					<div style="white-space:pre-wrap;">{{ languages($Item->description, $Item->description_fr) }}</div>
				</span>
			</div>
			<div class="spacer10"></div>
@endforeach			
			<div class="spacer20"></div>			

@endsection