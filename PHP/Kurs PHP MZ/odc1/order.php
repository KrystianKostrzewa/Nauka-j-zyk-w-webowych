<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Podsumowanie zamówienia</title>
	<meta name="description" content="O P I S" />
	<meta name="keywords" content="K E Y W O R D S Y" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>
	
<?php
	
	$paczki = $_POST['paczki'];
	$grzebienie = $_POST['grzebienie'];
	$suma = $paczki * 0.99 + $grzebienie * 1.29;
	
echo<<<END

	<h2>Podsumowanie zamówienia</h2>
	
	<table border="1" cellpadding=10 cellspacing="0">
		<tr>
			<td>Pączkek (0.99PLN/szt):</td> <td>$paczki</td>
		</tr>
		<tr>
			<td>Grzebień (1.29PLN/szt):</td> <td>$grzebienie</td>
		</tr>
		<tr>
			<td>Suma</td> <td>$suma PLN</td>
		</tr>
	</table>
	<br/>
	<a href="index.php">Wróć na stronę głowną</a>
	
END
	
?>
	
</body>
</html>