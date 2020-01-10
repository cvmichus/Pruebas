<?php
class Conectar{
    public static function conexion(){

    	$SERVER =  "localhost";  
		$PASS   =  "Incapital2018"; 
		$USER   =  "sa";
		$BASE   =  "TicketsFortia";

    	$info= array('Database'=>$BASE, 'UID'=>$USER, 'PWD'=>$PASS);
        $conexion=new sqlsrv_connect($SERVER, $info);
      
        return $conexion;
    }
}
?>
