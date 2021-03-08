<?php
include ('../../cdn/config.php');
if($enable == false){
	header("Location: https://hittsad.ml/disable");
	die();
}
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = 'INSERT INTO v1_about (ip, lasturl, useragent, data) VALUES ("' . $ip . '", "' . $lasturl . '", "' . $useragent . '", "' . $data . '")';

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
	<title>HITTSAD - ABOUT US</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Самый лучший эксклюзивный чит который находится в бете! Встроенный скин ченджер и эксклюзивная менюшка">
	<meta name="author" content="luas">
	<meta property="og:title" content="HITTSAD">
	<meta property="og:image" content="https://hittsad.ml/cdn/img/logo.png">
	<meta property="og:description" content="Самый лучший эксклюзивный чит который находится в бете! Встроенный скин ченджер и эксклюзивная менюшка">
	<link href="https://hittsad.ml/cdn/img/logo.ico" rel="icon" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://hittsad.ml/cdn/db_connect.css">
	<script src="https://hittsad.ml/cdn/db_connect.js"></script>
	<style type="text/css"> <?php echo 'body{ background: url("' . $background . '"); }'; ?> </style>
</head>

<body>
	<div class="animate__animated animate__fadeInDown secondheader">
		<div class="sh1">
			<button class="shbutton" onclick="Back();"><p>Back</p></button>
		</div>
	</div>
	<div class="animate__animated animate__fadeInDown maintext">
		<h1>ABOUT US</h1>
	</div>
	<div class="animate__animated animate__fadeInDown description">
		Привет!
		Мы команда которая делает читы для кс го и для других игр!
		 И мы хотим показать что наши читы лучшие! <br>
		- Статус Чита:<a class="undetected__color"> Undetected</a> <br>
		- Чит находится в Бета тестирование по этому бесплатный! <br>
		- Наш спонсор <a onclick="Back(1);" class="link">lastcorn.cf</a>
	</div>

	<div class="imgr">
		<div class="account_1">
			<div class="li_1">
				<img class="animate__animated animate__fadeIn asi img" src="https://hittsad.ml/cdn/v1/img/Itachi.png">
				<span class="descript_1">
					<a class="name__color">ITACHI</a> <br>
					<a class="discord"><b>Discord: </b>ɪᴛᴀᴄʜɪ#5218</a> <br>
					<a class="developer_color rank__position">Разработчик ПО</a>
				</span>
			</div>
	 	</div>
	 	<div class="account_2">
			<div class="li_2">
				<img class="animate__animated animate__fadeIn asi img" src="https://hittsad.ml/cdn/v1/img/Errda.png">
				<span class="descript_2">
					<a class="name__color">Errda</a> <br>
					<a class="discord"><b>Discord: </b>!Errda#4982 <br>
					<a class="developer_color rank__position">Дизайнер</a>
				</span>
			</div>
	 	</div>
	 	<div class="account_3">
			<div class="li_3">
				<img class="animate__animated animate__fadeIn asi img" src="https://hittsad.ml/cdn/v1/img/Senpai.png">
				<span class="descript_3">
					<a class="name__color">Senpai</a> <br>
					<a class="discord"><b>Discord: </b>Senpai#3111</a> <br>
					<a class="developer_color rank__position">Front-End Разработчик</a>
				</span>
			</div>
	 	</div>
	</div>

	<audio id="audiopl">
		<source src="https://listen4.myradio24.com/63509" type="audio/mpeg">
	</audio>

	<div class="border">
 		<input type="range" min="1" max="20" id="volumes" oninput="volumesetting()" value="3">
 	</div>

	<script>
		var audio = document.getElementById("audiopl");
		audio.play();
		audio.volume = 0.015;
		function volumesetting() {
   		 	size = document.getElementById("volumes").value;
   			audio = document.getElementById("audiopl");
   		 	audio.volume = 0.005*size;
   		}
	</script>

	<script type="text/javascript">
	function Back(id)
		{
			if (id == 1){
				window.open('https://lastcorn.cf/', '_blank');
			}else{
				window.open(window.history.back(), '_self');
			}
		}
	</script>

</body>
