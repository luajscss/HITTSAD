<?php
include ('../cdn/config.php');
if($enable == true){
	header("Location: https://hittsad.ml/disable");
	die();
}
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = 'INSERT INTO selecter (ip, lasturl, useragent, data) VALUES ("' . $ip . '", "' . $lasturl . '", "' . $useragent . '", "' . $data . '")';

	if($mysql == true){
		if(mysqli_query($conn, $sql)){
			if($connection_text == true){
				echo '<a class="connect" id="opacit">Connection successfully</a>';
			}
		}else{
			if($connection_text == true){
				echo '<a class="unconnect" id="opacit">Connection Failed</a>';
			}
		}
	}else{
		if($debug == true){
			echo '<a class="unconnect" id="opacit">Mysql Disabled</a>';
		}
	}

mysqli_close($conn);

?>


<!DOCTYPE html>

<head>
	<title>HITTSAD - version selecter</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Самый лучший эксклюзивный чит который находится в бете! Встроенный скин ченджер и эксклюзивная менюшка">
	<meta name="author" content="luas">
	<meta property="og:title" content="HITTSAD">
	<meta property="og:image" content="https://hittsad.ml/css/img/logo.png">
	<meta property="og:description" content="Самый лучший эксклюзивный чит который находится в бете! Встроенный скин ченджер и эксклюзивная менюшка">
	<link rel="stylesheet" type="text/css" href="https://hittsad.ml/cdn/background.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link href="https://hittsad.ml/css/img/logo.ico" rel="icon" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
	<div class="animate__animated animate__fadeInDown header">
		<strong>HITTSAD
	</div>

	<div class="animate__animated animate__fadeInDown maintext">
		<h1>Какую версию начального меню ты хочешь увидеть?</h1>

		<div class="animate__animated animate__fadeInDown secondheader">
			<div class="sh1">
				<button class="shbutton" onclick="Redire(1);"><p>Версия 1</p></button>
			</div>
			<div class="sh1">
				<button class="shbutton" onclick="Redire(2);"><p>Версия 2</p></button>
			</div>
		</div>
		
	</div>

	<script type="text/javascript">
	function Redire(a)
		{	
			if (a == 1){
				window.open('v1', '_self');
			}
			if (a == 2){
				window.open('v2', '_self');
			}
		}
	</script>

</body>