@extends('layout/default')

@section('main')
			<div class="spacer40"></div>
			
			<h3 class="upper">{{ languages($Event->title, $Event->title_fr) }}</h3>
			<h3>{{ date('F j, Y', strtotime($Event->created_at)) }}</h3>

			<div class="spacer40"></div>
			
			<div class="article" style="width:96%; margin:0 auto; background-color:#fff; border:1px solid #cfcfcf; border-radius:15px;">
				<div class="spacer50"></div>
				
				<div class="articleimg" style="height:400px; width:calc(40% - 20px); padding-left:20px; float:left;">
					<img style="height:100%; width:100%;" src="images/{{ $Event->image }}" />
				</div>
				
				<div class="articleinfo" style="width:calc(60% - 60px); padding-left:30px; padding-right:30px; float:left; white-space:pre-wrap;">{{ languages($Event->event, $Event->event_fr) }}</div>				
			</div>
			
			<script>
			
				$.each($('.article'),function(){
					
					if ($(this).find('.articleimg').height() > $(this).find('.articleinfo').height())
					{
						$(this).css('height', $('.articleimg').height() + 100);
					}
					else
					{
						$(this).css('height', $(this).find('.articleinfo').height() + 100);
					}
					
					
				});
				
			</script>
			
			<div class="spacer50"></div>
@endsection