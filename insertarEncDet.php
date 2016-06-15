<?php
include_once('conexion/confi.php');

if ($_SERVER['REQUEST_METHOD']=="POST") {
	
	$numerolinea = isset($_POST['numerolinea']) ? mysql_real_escape_string($_POST['numerolinea']) : "";
	$codprod = isset($_POST['codprod']) ? mysql_real_escape_string($_POST['codprod']) : "";
	$canpedido = isset($_POST['canpedido']) ? mysql_real_escape_string($_POST['canpedido']) : "";
	$precio = isset($_POST['precio']) ? mysql_real_escape_string($_POST['precio']) : "";
	$porcentajeDesc = isset($_POST['porcentajeDesc']) ? mysql_real_escape_string($_POST['porcentajeDesc']) : "";
	$montoDesc = isset($_POST['montoDesc']) ? mysql_real_escape_string($_POST['montoDesc']) : "";
	$fechapedido = isset($_POST['fechapedido']) ? mysql_real_escape_string($_POST['fechapedido']) : "";
	$subTotal = isset($_POST['subTotal']) ? mysql_real_escape_string($_POST['subTotal']) : "";
	$total = isset($_POST['total']) ? mysql_real_escape_string($_POST['total']) : "";

	$sql = ("CALL SP_InsertarFactura(".$numerolinea.", '".$codprod."', ".$canpedido.", ".$precio.", ".$porcentajeDesc.", ".$montoDesc.", '".$fechapedido."', ".$subTotal.", ".$total.")");
	$query = mysql_query($sql);
	if ($query) {
		$json = array("status" => 1, "msg" => "well done");
	}else{
		$json = array("status" => 0, "msg" => "error");
	}
}else{
	$json = array("status" => 0, "msg" => "method not accepted")
}
@mysql_close($conn);


?>