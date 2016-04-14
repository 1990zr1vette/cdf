@extends('layout/admin')

@section('main')

			{!! Form::model($Announcement, ['id'=>'AnnouncementForm', 'files' => true, 'method'=>'PATCH', 'route'=>['admin.announcements.update', $Announcement->id], 'class'=>'form96']) !!}			

				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('announcement', 'ANNOUNCEMENT:') !!}
					{!! Form::text('announcement') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="formrow">
					{!! Form::label('announcement_fr', 'ANNOUNCEMENT (FR):') !!}
					{!! Form::text('announcement_fr') !!}
				</div>
				
				<div class="spacer10"></div>
				
				<div class="button">
					<button type="submit" class="btn btn-primary">UPDATE</button>					
				</div>				
				
				<div class="spacer10"></div>
				
			{!! Form::close() !!}			

			
			<script> 
				$('input[type=text]').attr('required',true);
				$('textarea').attr('required',true);
				$('#imagebutton').css('left',$('#image').position().left);
				$('#image').css('height', $('#imagebutton').height() + parseInt( $('#imagebutton').css('padding-bottom').replace('px','') ) + parseInt( $('#imagebutton').css('padding-top').replace('px','') ) + 2);
				$('#image').css('width', $('#imagebutton').width() + parseInt( $('#imagebutton').css('padding-left').replace('px','') ) + parseInt( $('#imagebutton').css('padding-right').replace('px','') ) + 2);
				
				$('#imagebutton').click(function(){
					$('#image').click();
				});				
				
				$('#image').change(function(){
					
					$('#imagename').html($(this)[0].files[0].name);
					
				});
			</script>

@endsection