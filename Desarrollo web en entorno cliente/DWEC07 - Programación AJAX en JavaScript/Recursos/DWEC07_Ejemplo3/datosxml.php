<?php
	// Leemos el contenido del fichero XML
	// e imprimimos su contenido.
	// Muy importante indicar al navegador que va a recibir contenido XML
	// eso lo hacemos con la siguiente cabecera:
	header("Content-Type: text/xml"); 
	
	$ficheroxml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
	$ficheroxml .= "
		<CATALOG>
			<CD>
				<TITLE>Empire Burlesque</TITLE>
				<ARTIST>Bob Dylan</ARTIST>
				<COUNTRY>USA</COUNTRY>
				<COMPANY>Columbia</COMPANY>
				<PRICE>10.90</PRICE>
				<YEAR>1985</YEAR>
			</CD>
			<CD>
				<TITLE>Hide your heart</TITLE>
				<ARTIST>Bonnie Tyler</ARTIST>
				<COUNTRY>UK</COUNTRY>
				<COMPANY>CBS Records</COMPANY>
				<PRICE>9.90</PRICE>
				<YEAR>1988</YEAR>
			</CD>
			<CD>
				<TITLE>Greatest Hits</TITLE>
				<ARTIST>Dolly Parton</ARTIST>
				<COUNTRY>USA</COUNTRY>
				<COMPANY>RCA</COMPANY>
				<PRICE>9.90</PRICE>
				<YEAR>1982</YEAR>
			</CD>
			<CD>
				<TITLE>Still got the blues</TITLE>
				<ARTIST>Gary Moore</ARTIST>
				<COUNTRY>UK</COUNTRY>
				<COMPANY>Virgin records</COMPANY>
				<PRICE>10.20</PRICE>
				<YEAR>1990</YEAR>
			</CD>
		</CATALOG>";

	echo $ficheroxml;
?>