<?php
include ('../cdn/config.php');
if($enable == false){
	header("Location: https://hittsad.ml/disable");
	die();
}
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = 'INSERT INTO str_error (ip, lasturl, useragent, data) VALUES ("' . $ip . '", "' . $lasturl . '", "' . $useragent . '", "' . $data . '")';

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
	<meta name="author" content="luas">
	<meta property="og:title" content="HITTSAD">
	<meta property="og:image" content="https://hittsad.ml/cdn/img/logo.png">
	<meta property="og:description" content="Ой. Кажется вы не туда попали :/">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link href="https://hittsad.ml/cdn/img/logo.ico" rel="icon" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://hittsad.ml/cdn/db_connect.css">
	<script src="https://hittsad.ml/cdn/db_connect.js"></script>
	<style type="text/css"> <?php echo 'body{ background: url("' . $background . '"); }'; ?> </style>
</head>

<body>
	<div class="animate__animated animate__fadeInDown header">
		<strong>HITTSAD
	</div>

	<div class="animate__animated animate__fadeInDown maintext">
		<img class="img asi" src="https://hittsad.ml/cdn/img/impact.gif">
		<h1>Ты как-то смог <a class="oops">ошибится</a> страницей </h1>

		<div class="animate__animated animate__fadeInDown secondheader">
			<div class="sh1">
				<button class="shbutton" onclick="Back();"><p>Вернутся назад</p></button>
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