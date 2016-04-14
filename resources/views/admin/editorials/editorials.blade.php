@extends('layout/admin')

@section('main')

			<div class="button">
				<a href="admin/editorials/create">
					<button type="submit" class="btn btn-primary">ADD EDITORIAL</button>
				</a>
			</div>
			
@foreach($Editorials as $Editorial)
			<div class="productrow row60">
				<span class="">{{ $Editorial->title }}</span>
				
				<span class="button">
					<button for="{{ $Editorial->id }}" class="current btn btn-primary{{ $Editorial->current }}">CURRENT</button> 
				</span>
				
				<span class="button">
					<a href="admin/editorials/{{ $Editorial->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
			</div>
@endforeach

			<script>
				$('.current').click(function(){
					
					if ($(this).hasClass('btn-primary0') == true)
					{
						$(this).removeClass('btn-primary0').addClass('btn-primary1');
					}
					else
					{
						$(this).removeClass('btn-primary1').addClass('btn-primary0');
					}
					
					var url = 'admin/editorials/updateCurrent/' + $(this).attr('for');
					
					$.ajax({url:url}).done(function(response){
						if (response == '1')
						{
							window.location = 'admin/editorials';
						}
					});
					
					
				});
			</script>
				
@endsection