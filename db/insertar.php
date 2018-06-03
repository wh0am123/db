<?php 
include ("conexion.php");
if ( isset ( $_POST [ 'nombre' ] ) && !empty ( $_POST [ 'nombre' ] ) &&
 isset( $_POST [ 'pw' ] ) && !empty ( $_POST [ 'pw' ] ) )
  {


 $conexion = mysqli_connect ($host , $user) or die ("error al cargar los datos");

   mysql_select_db($conexion, $db) or die ("error al cargar los datos");  
	
	$query = mysqli_query($con, "INSERT INTO curso php (nombre,pw) value( ".$_POST [ nombre ]."','".$_POST [ pw ]."');");

		if($query) {
		echo "operacion realizada con exito";	
		}
	
 }


 ?>
