
		<?php
	require_once('conexion.php');

	echo "<h1>Datos de Temperatura</h1>";
	
	 $device = $_POST['device_label'];
	 $temper = $_POST['tempe'];

	echo "<h2>Dispositivo: </h2>".$device. "<br>";
	echo "<h2>Temperatura: </h2>".$temper."°C<br>";


	echo "<h1>Datos de Humedad</h1>";
	
	 
	 $humedad = $_POST['hume'];

	
	echo "<h2>Humedad: </h2>".$humedad."<br>";
	$conn= new conexion();
	$query = "INSERT INTO `historia` (`Id_device`, `Temperatura`, `Humedad`, `Fecha`) VALUES ('$device', '$temper', '$humedad', NOW())"
	
	
?>
	
	

