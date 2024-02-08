<?php

require_once('include/xajax_core/xajax.inc.php');
$xajax = new xajax();

$xajax->register(XAJAX_FUNCTION,"buscarProducto");
$xajax->register(XAJAX_FUNCTION,"compruebaPrecio");
$xajax->register(XAJAX_FUNCTION,"modificar");

require ('include/pFunciones.php');
$xajax->configure('javascript URI','./include/');

$xajax->configure("debug",true); // ----------- comentar si no se quiere el debugger -----------
$xajax->processRequest();

?>

<html>    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>Repaso7-ID producto</title>
      
      <?php $xajax->printJavascript(); ?>
      <script type="text/javascript" src="include/jfunciones.js"></script>
    </head>

    <body> 
        <form name='formulario' id='formulario'  method="post" >

         <h2>MODIFICAR PRODUCTO</h2>
		
         
        <hr/>
		 <p style="color:red;">pinchar fuera de la caja de texto para capturar el evento onBlur()</p>

            <div>
                ID producto <input type="text" name="id" id="id" onblur="buscarProducto(document.formulario.id.value)"></input>
                <span id="respuesta1"></span>
            </div>  
            <div>
                Nombre <input type="text" name="nombre"  id="nombre"></input>                
            </div>
			<div>
				Precio <input type="text" name="pvp" id="pvp" </input>
                <span id="respuesta2"></span>
            </div> 
            <input type="submit" name="modificar" value="Modificar"/>                
            <span id="respuesta3"></span>
        </form> 
        <hr/>            

    </body>
</html>


