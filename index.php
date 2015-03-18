<?php   
 
	//suscripción a canal de redis
	$redis = new Redis();    
	$redis->pconnect('172.16.5.121',6379);

	//publicación de evento en redis (se puede hacer en el create de laravel)
	$mensaje = array("tipo" => "notificación", "mensaje" => "jose");

	$redis->publish('canal', json_encode($mensaje)); // send message to channel 1.  
	 
	echo "Listo el pollo \n";

	//se cierra la comunicación
	$redis->close();
 
?>