<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>ADMIN</title>
		
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">

		<base href="{{URL::to('')}}/" />
		
		<!--link rel="stylesheet" href="css/app.css">-->
		<!--<link rel="stylesheet" href="css/style.css">-->
		<link rel="stylesheet" href="css/admin.css">
		

		<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="js/jquery.form.js" type="text/javascript"></script>
		
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<header>
			<nav>
				<ul>
					<li>
						<a href="admin/brands">BRANDS</a>
					</li>
					<li>
						<a href="admin/products">PRODUCTS</a>
					</li>
					<li>
						<a href="admin/inventory">Inventory</a>
					</li>					
				</ul>
			</nav>
		</header>
		
		<script>
			$('header nav ul li').css('width',(100 / $('header nav ul li').size()) + '%');
		</script>
		
		<main>
			@yield('main')
		</main>
		
		<footer>
		</footer>
	
	</body>
	
</html>

