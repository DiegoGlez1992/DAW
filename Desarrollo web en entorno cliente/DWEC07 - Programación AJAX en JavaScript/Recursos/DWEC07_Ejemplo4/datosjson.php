<?php
	// Cabecera para indicar que vamos a enviar datos JSON y que no haga caché de los datos.
	header('Content-Type: application/json');

	$datosjson = "[
		{
			\"title\": \"Empire Burlesque\",
			\"artist\": \"Bob Dylan\",
			\"country\": \"USA\",
			\"company\": \"Columbia\",
			\"price\": 10.90,
			\"year\": 1985
		},
		{
			\"title\": \"Hide your heart\",
			\"artist\": \"Bonnie Tyler\",
			\"country\": \"UK\",
			\"company\": \"CBS Records\",
			\"price\": 9.90,
			\"year\": 1988
		},
		{
			\"title\": \"Greatest Hits\",
			\"artist\": \"Dolly Parton\",
			\"country\": \"USA\",
			\"company\": \"RCA\",
			\"price\": 9.90,
			\"year\": 1982
		},
		{
			\"title\": \"Still got the blues\",
			\"artist\": \"Gary Moore\",
			\"country\": \"UK\",
			\"company\": \"Virgin records\",
			\"price\": 10.20,
			\"year\": 1990
		}
	]";
	echo $datosjson;
?>