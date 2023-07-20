<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Invernadero</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Temperatura:</h1>
	<?php
	echo "Datos de Temperatura.<br>";
	
	 $device = $_POST['device_label'];
	 $temp = $_POST['tempe'];

	echo "Dispositivo: ".$device. "<br>";
	echo "Temperatura: ".$temper."°C<br>";

	echo "Datos de Humedad.<br>";
	
	 $device = $_POST['device_label2'];
	 $hum = $_POST['hum'];

	echo "Dispositivo: ".$device. "<br>";
	echo "Humedad: ".$hum."<br>";


?>
</body>
</html>