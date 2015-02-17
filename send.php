<?php
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$mail = $_POST['mensaje'];
			$asunto = $_POST['motivo'];
			$headers = "From: $nombre <$email> \r\n";
			$bool = mail("contacto@redot.mx",$asunto,$mail,$headers);


			if($bool){
			    echo "Mensaje enviado";
			}else{
			    echo "Mensaje no enviado";
}
?>