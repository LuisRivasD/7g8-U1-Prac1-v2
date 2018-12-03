<?php
/*Archivo:  segunda.php
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
	
	if ($sErr != ""){
		header("Location: error.php?sError=".$sErr);
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo controles HTML5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h4>Datos capturados</h4>
		<table border="1">
				<tr>
					<td>Nombre:</td>
                    <td><?php echo $_POST["txtNombre"];?></td>
					<td>Fecha Inicio Curso:</td>
					<td><?php echo $_POST["txtFecInicio"];?></td>
				</tr>
				<tr>
					<td>Apellido:</td>
					<td><?php echo $_POST["txtApellido"];?></td>
					<td>Correo electrónico:</td>
					<td><?php echo $_POST["txtCorreo"];?></td>
				</tr>
				<tr>
					<td>Fecha de Nacimiento:</td>
					<td><?php echo $_POST["txtFecNac"];?></td>
					<td>Contraseña:</td>
					<td><?php echo $_POST["txtPassword"];?></td>
				</tr>
				<tr>
					<td>Genero:</td>
					<td><?php echo $_POST["txtGenero"];?></td>
					<td>Página Web Personal:</td>
					<td><?php echo $_POST["txtWebPersonal"];?></td>
				</tr>
				<tr>
					<td>Foto de Perfil:</td>
					<td><?php echo $_POST["txtArchFoto"];?></td>
					<td>Curso:</td>
					<td><?php echo $_POST["txtCurso"];?></td>
                </tr>

		</table>
		<a href="index.html">Regresar</a>
		<br/>
		<br/>
		Datos de la solicitud
		<?php
			foreach($_SERVER as $llave=>$valor){
				echo $llave." ".$valor."<br/>";
			}
		?>
		<br/>
		<br/>
		Datos transmitidos <br/>
		<?php
			foreach($_POST as $llave=>$valor){
				echo $llave."".$valor."<br/>";
			}
		?>
		
	</body>
</html>