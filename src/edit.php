<?php
//Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");

/*Comprueba si hemos llegado a esta página PHP a través del formulario de modificaciones. 
En este caso comprueba la información "modifica" procedente del botón Guardae del formulario de Modificaciones
Transacción de datos utilizando el método: POST
*/
if(isset($_POST['modifica'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$tit = mysqli_real_escape_string($mysqli, $_POST['tit']);
	$lan = mysqli_real_escape_string($mysqli, $_POST['lan']);
	$ep = mysqli_real_escape_string($mysqli, $_POST['ep']);
	$est = mysqli_real_escape_string($mysqli, $_POST['est']);
	$continua = mysqli_real_escape_string($mysqli, $_POST['continua']);

	if(empty($tit) || empty($lan) || empty($ep) || empty($est) | empty($continua))	{
		if(empty($tit)) {
			echo "<font color='red'>Campo nombre vacío.</font><br/>";
		}

		if(empty($lan)) {	
			echo "<font color='red'>Campo apellido vacío.</font><br/>";
		}

		if(empty($ep)) {
			echo "<font color='red'>Campo edad vacío.</font><br/>";
		}

		if(empty($est)) {
			echo "<font color='red'>Campo edad vacío.</font><br/>";
		}

		if(empty($continua)) {
			echo "<font color='red'>Campo edad vacío.</font><br/>";
		}

	} //fin si
	else 
	{
//Prepara una sentencia SQL para su ejecución. En este caso una modificación de un registro de la BD.				
		$stmt = mysqli_prepare($mysqli, "UPDATE anime SET tit=?,lan=?,ep=?,est=?,continua=? WHERE id=?");
/*Enlaza variables como parámetros a una setencia preparada. 
i: La variable correspondiente tiene tipo entero
d: La variable correspondiente tiene tipo doble
s:	La variable correspondiente tiene tipo cadena
*/				
		mysqli_stmt_bind_param($stmt, "ssissi", $tit, $lan, $ep, $est, $continua, $id);
//Ejecuta una consulta preparada			
		mysqli_stmt_execute($stmt);
//Libera la memoria donde se almacenó el resultado
		mysqli_stmt_free_result($stmt);
//Cierra la sentencia preparada		
		mysqli_stmt_close($stmt);

		header("Location: index.php");
	}// fin sino
}//fin si
?>


<?php
/*Obtiene el id del dato a modificar a partir de la URL. Transacción de datos utilizando el método: GET*/
$id = $_GET['id'];

$id = mysqli_real_escape_string($mysqli, $id);


//Prepara una sentencia SQL para su ejecución. En este caso selecciona el registro a modificar y lo muestra en el formulario.				
$stmt = mysqli_prepare($mysqli, "SELECT tit, lan, ep, est, continua FROM anime WHERE id=?");
//Enlaza variables como parámetros a una setencia preparada. 
mysqli_stmt_bind_param($stmt, "i", $id);
//Ejecuta una consulta preparada
mysqli_stmt_execute($stmt);
//Enlaza variables a una setencia preparada para el almacenamiento del resultado
mysqli_stmt_bind_result($stmt, $tit, $lan, $ep, $est, $continua);
//Obtiene el resultado de una sentencia SQL preparada en las variables enlazadas
mysqli_stmt_fetch($stmt);
//Libera la memoria donde se almacenó el resultado		
mysqli_stmt_free_result($stmt);
//Cierra la sentencia preparada
mysqli_stmt_close($stmt);
//Cierra la conexión de base de datos previamente abierta
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Modificación anime </title>
<!--	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
-->
</head>

<body>
<!--	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
-->
<div>
	<header>
		<h1>Panel de Control</h1>
	</header>
	
	<main>				
	<ul>
		<li><a href="index.php" >Inicio</a></li>
		<li><a href="add.html" >Alta</a></li>
	</ul>
	<h2>Modificación anime</h2>
<!--Formulario de edición. 
Al hacer click en el botón Guardar, llama a esta misma página: edit.php-->
	<form action="edit.php" method="post">
		<div>
			<label for="tit">Titulo</label>
			<input type="text" name="tit" id="tit" value="<?php echo $tit;?>" required>
		</div>

		<div>
			<label for="lan">Lanzamiento</label>
			<input type="text" name="lan" id="lan" value="<?php echo $lan;?>" required>
		</div>

		<div>
			<label for="ep">Episodios</label>
			<input type="number" name="ep" id="ep" value="<?php echo $ep;?>" required>
		</div>

		<div>
			<label for="est">Estudio</label>
			<input type="text" name="est" id="est" value="<?php echo $est;?>" required>
		</div>

		<div>
			<label for="continua">Continua</label>
			<input type="text" name="continua" id="continua" value="<?php echo $continua;?>" required>
		</div>

		<div >
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="submit" name="modifica" value="Guardar">
			<input type="button" value="Cancelar" onclick="location.href='index.php'">
		</div>
	</form>

	</main>	
	<footer>
	Created by the jesus cuesta gomez sin copiar a nadie &copy; 2024
  	</footer>
</div>
</body>
</html>
