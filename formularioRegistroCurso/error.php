<?php
/*Archivo:  ejctrls\error.php
Objetivo: manejo de errores (presentación)
Autor:    BAOZ
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo formulario HTML5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Error</h1>
		<h4><?php echo $_REQUEST["sError"]; ?></h4>
		<a href="index.html">Regresar</a>
	</body>
</html>