<?php
include ('../cdn/config.php');
if($enable == !false){
	header("Location: https://hittsad.ml/");
	die();
}
?>
<!DOCTYPE html>

<head>
	<title>HITTSAD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="author" content="luas">
	<meta property="og:title" content="HITTSAD">
	<meta property="og:image" content="https://hittsad.ml/cdn/img/logo.png">
	<meta property="og:description" content="Сайт временно не работает :/">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link href="https://hittsad.ml/cdn/img/logo.ico" rel="icon" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="https://hittsad.ml/css/style_dark.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://hittsad.ml/cdn/db_connect.css">
	<script src="https://hittsad.ml/cdn/db_connect.js"></script>
</head>

<body>
	<div class="animate__animated animate__fadeIn header">
		<strong>HITTSAD
	</div>

	<div class="animate__animated animate__fadeIn maintext">
		<img class="img asi" src="https://hittsad.ml/cdn/img/impact.gif">
		<h1>Администратор временно отключил страницу <a class="oops"> =(</a></h1>

		<div class="animate__animated animate__fadeIn secondheader">
			<div class="sh1">
				<button class="shbutton" onclick="Back();"><p>Обновить страницу</p></button>
			</div>
		</div>
		
	</div>

	<script type="text/javascript">
	function Back()
		{	
			window.open(window.history.back(), '_self');
		}
	</script>

</body>