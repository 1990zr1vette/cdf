@extends('layout/default')

@section('main')
			<div id="banner">
				<img src="images/cdf-banners-contact_review.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle">{{ languages('Submit a Review', 'Envoyer une critique') }}</h1>
			</div>
			
			<script src="js/banner.js" type="text/javascript"></script>	
			
			<div class="spacer20"></div>
			
			<h3 class="unica">
				{{ languages('We invite you to share your experience...', 'Nous vous invitons à partager votre expérience...') }}
			</h3>	
			<h4 class="unica">
				{{ languages('Did our products and services meet and beat your expectations?', 'Nos services et nos produits ont été à la hauteur, voire au-delà de vos attentes?') }}
			</h4>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<form accept-charset="UTF-8" action="admin/testimonials" method="POST">
				{!! Form::token() !!}
				
				<input type="hidden" name="language" value="{{ Session::get('lang') }}" />
				
				<div class="spacer20"></div>
				
				<div class="formrow">
					<label class="black" for="name">{{ languages('NAME', 'NOM') }}:</label>
					<input class="black" type="text" id="name" name="name">
				</div>
				
				<div class="formrow">
					<label class="black" for="email">{{ languages('EMAIL' ,'COURRIEL') }}:</label>
					<input class="black" type="text" id="email" name="email">
				</div>
				
				<div class="formrow">
					<label class="black" for="telephone">{{ languages('TELEPHONE' ,'TELEPHONE') }}:</label>
					<input class="black" type="text" id="telephone" name="telephone">
				</div>				

				<div class="formrow">
					<label class="black" for="title">{{ languages('SUBJECT' ,'SUJET') }}:</label>
					<input class="black" type="text" id="title" name="title">
				</div>				
				
				<div class="formtextarearow">
					<label class="black" for="testimonial">{{ languages('TESTIMONIAL', 'TEMOINAGE') }}:</label>
					<textarea class="black" id="testimonial" rows="10" cols="50" name="testimonial" required="required"></textarea>
				</div>		
												
				<div class="button">
					<button class="btn btn-primary black" type="submit">{{ languages('ADD TESTIMONIAL', 'AJOUTE TEMOINAGE') }}</button>					
				</div>
				
				<div class="spacer20"></div>
					
			</form>			
@endsection