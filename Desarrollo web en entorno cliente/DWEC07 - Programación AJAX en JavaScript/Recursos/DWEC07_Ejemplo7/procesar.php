<?php
	// Imprimimos un mensaje con los textos recibidos
	if (isset($_GET['nombre']))
		echo "<p>Saludos desde el servidor: hola {$_GET['nombre']} {$_GET['apellidos']}.</p>";
	else if (isset($_POST['nombre']))
		echo "Saludos desde el servidor: hola {$_POST['nombre']} {$_POST['apellidos']}. ";
		
	// Mostramos la fecha y hora del servidor web.
	echo "<p>La fecha y hora del Servidor Web: ";
	echo date("j/n/Y G:i:s"); 
	echo "</p>";
?>