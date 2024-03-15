<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Piekarnia</title>
	<meta name="description" content="O P I S" />
	<meta name="keywords" content="K E Y W O R D S Y" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>
	<h1>Zamówienie online</h1>
	
	<form action="order.php" method="post" >
		Ile pączków? (0.99 PLN/szt):
		<input type="text" name="paczki" />
			<br/><br/>
		Ile grzebieni? (1.29 PLN/szt):
		<input type="text" name="grzebienie" />
			<br/><br/>
		<input type="submit" value="Wyślij zamówienie" />
	</form>
	
</body>
</html>