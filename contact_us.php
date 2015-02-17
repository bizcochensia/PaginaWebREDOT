<?php include "php/sky.inc" ?>
	<form action="send.php" method="post">
		<input type="text" name="nombre" placeholder="Escribe tu nombre" required><br>
		<input type="email" name="email" placeholder="Escribe tu correo" required><br>
		<select name="motivo">
			<option value="">Cotización</option>
			<option value="">Otra cosa</option>
			<option value="">Otra mas</option>
		</select><br>
		<textarea name="mensaje"></textarea><br>
		<input type="submit" value="Enviar Datos" id="btsubmit">
	</form>	
<?php include "php/hell.inc" ?>	