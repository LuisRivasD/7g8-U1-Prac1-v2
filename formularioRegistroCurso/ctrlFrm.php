<?php
/*Archivo:  ctrlFrm.php
Objetivo: ejemplo de procesamiento de formulario usando POST
Autor:    BAOZ
*/
$sErr="";
$sNom="";
	/*Verificar que haya llegado el nombre*/
	if (isset($_POST["txtNombre"]) && !empty($_POST["txtNombre"]))
		$sNom = $_POST["txtNombre"];
	else
		$sErr = "Faltan datos";
	
	if (empty($sErr))
		include("segunda.php");
	else{
		header("Location: error.php?sError=".$sErr);
		exit();
	}
?>