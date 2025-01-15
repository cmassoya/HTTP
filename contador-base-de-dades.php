<?php
conjunto ini ('errores de visualicación', 1); 
conjunto ini ('mostrar_errores_de_inicio', 1);
informe de error(E_TODOS);

$nombre del servidor="servidor local";
$nombre de usuario="root";
$contraseña="";
$nombre de la base de datos="Estadistica";

$Conectar=nuevo MySQLi($nombre del servidor, $nombre de usuario, $contraseña, $nombre de la base de datos);

si($Conectar->connect_error){
    eco "Error en la conexión: ".$Conectar->connect_error;
    salida()
}

$IP=$_SERVER['REMOTE_ADDR'];
$sql="INSERTAR EN visitas (IP) VALORES ('$IP')";
$Conectar->consulta($sql);

$resultado=$Conectar->consulta("SELECCIONAR CUENTA (*) DEL regustro");
$fila=matriz de obtencion de MySQLi($resultado);
eco $fila[0];

$Conectar->cerrar();
?>
