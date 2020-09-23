<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$user ='postgres';
$passwd ='unsa';
$db  = 'bdbanco';
$port = 5432;
$host ='localhost';
$strCnx="host=$host port=$port dbname=$db user=$user password=$passwd";

try{
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
}
catch(Exception $e){
	echo 'Exception: ',$e->getMessage();
}

try{
	$dni  =(int)($_POST['dni']);
	$nomb = pg_escape_string($_POST['nomb']);
	$sexo = pg_escape_string($_POST['sexo']);
	$gen = pg_escape_string($_POST['gen']);
	$calle = pg_escape_string($_POST['calle']);
	$num  =(int)($_POST['num']);
	$compl = pg_escape_string($_POST['compl']);
	$ciu = pg_escape_string($_POST['ciu']);
	$depar = pg_escape_string($_POST['depar']);

	$sql = "SELECT nuevo_cliente(" .$dni . ",'" .$nomb ."','".$sexo ."','".$gen."','".$calle."',".$num.",'".$compl."','".$ciu."','".$depar ."');";
    $query = pg_query($cnx,$sql);
    $result = pg_fetch_result($query, 0, 0);
    echo $result;
    pg_close($cnx);

}

catch (Exception $e){
	echo 'Exception: ',$e->getMessage();
}

?>


