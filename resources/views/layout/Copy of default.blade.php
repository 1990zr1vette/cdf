<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Coup de Foudre</title>
		
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		
		<meta name="description" content="{{ $description }}" />
		<meta name="keywords" content="{{ $keywords }}" />
		
		<meta property="fb:page_id" content="" />
		<meta property="fb:app_id" content="" />		
		<meta property="og:site_name" content="" />
		<meta property="og:title" content="" />
		<meta property="og:image" content="" />
		<meta property="og:url" content="" />
		<meta property="og:description" content="" />
	
		<base href="{{URL::to('')}}/" />
		
		<link rel="stylesheet" href="css/style.css">

		<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
		
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<header>
			<nav id="topnav">
				<ul>
					<li class="topli">
						<a href="{{ languages('home','acceuil') }}">{{ languages('HOME','ACCEUIL') }}</a>
					</li>
					<li class="topli">
						<a href="{{ languages('brands','marques') }}">{{ languages('BRANDS','MARQUES') }}</a>
					</li>					
					<li class="topli">
						<a href="">JOURNAL</a>
					</li>
					<li class="topli">
						<a href="">{{ languages('CONTACT US','CONTACTER NOUS') }}</a>
					</li>
					<li class="topli">
						<a href="{{ $urlol }}">{{ languages('FRANCAIS','ENGLISH') }}</a>
					</li>
				</ul>
			</nav>
			
			<nav id="bottomnav">
				<ul>
@foreach($products as $product)
					<li class="bottomli">
						<a href="products/{{ fixSegment($product['product']) }}/{{ $product['id'] }}">{{ languages($product['product'],$product['product_fr']) }}</a>
						<ul class="submenu">
@foreach($product['types'] as $type)
							<li>
								<a href="">{{ languages($type['type'],$type['type_fr']) }}</a>
							</li>
@endforeach						
						</ul>
					</li>
@endforeach				
				</ul>
			</nav>
		</header>
		
		<script>
			$('.topli').css('width',(100 / $('.topli').size()) + '%');
			$('.bottomli').css('width',(100 / $('.bottomli').size()) + '%');
			$.each($('.submenu'),function(){$(this).css('width',$(this).parent().width());});			
			
			$('.bottomli').hover(function(){$(this).find('.submenu').css('display','block');},function(){$(this).find('.submenu').css('display','none');});
		</script>
		
		<main>
			@yield('main')
		</main>
		
		<footer>
		</footer>
	
	</body>
	
</html>

