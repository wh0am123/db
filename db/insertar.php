<?php 
include ("conexion.php");
if ( isset ( $_POST [ 'nombre' ] ) && !empty ( $_POST [ 'nombre' ] ) &&
 isset( $_POST [ 'pw' ] ) && !empty ( $_POST [ 'pw' ] ) )
  {


 $conexion = mysql_connect ( $host , $user ) or die ("error al cargar los datos");

   mysql_select_db( $db , $conexion ) or die ("error al cargar los datos");  
	
	mysql_query("INSERT INTO curso php (nombre,pw) value('".$_POST [ nombre ]."','".$_POST [ pw ]."')" , $con);

		echo "operacion realizada con exito";
 }


 ?>
