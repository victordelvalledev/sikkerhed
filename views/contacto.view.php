<!DOCTYPE html>
<html lang="en">
<head>
	 <title>SIKKERHED</title>
<link rel="stylesheet" href="css/formulariocontacto.css">
<?php require 'header.view.php' ?>
<?php require 'menu.view.php' ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="titulo">Contacto</h1>
		</div>
	</div>
	<div class="contenedor col-sm-12">
		<div class="row">
			<div class="col-sm-6">
				<img src="imagenes/contacto/contacto1.png" title="SIKKERHED" alt="SIKKERHED" id="portada" class="img-responsive center-block" />
				<p> Matriz</br>
						Valle Sagrado #109</br>
						Guadalupe NL. Cp.67115</br>
						TEL.81 2526 0218</br></p>
			  <div class="row imgcenter">
					<div class="col-sm-12">
						<div class="Flexible-container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.8895087575115!2d-100.18832148489659!3d25.708082083661086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662ea3df188b42f%3A0x57555721a7740dca!2sValle+Sagrado%2C+San+Miguel%2C+Guadalupe%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1527471549985" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<img src="imagenes/contacto/contacto2.png" title="SIKKERHED" alt="SIKKERHED" id="portada" class="img-responsive center-block" />
				<p>Suc. Orizaba</br>
					Norte 16A #71-A Entre</br>
					Oriente 5 y 7 Orizaba, Ver</br>
					Tel: 272-143-2526.</br></p>
				<div class="row imgcenter">
					<div class="col-sm-12">
						<div class="Flexible-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.6667721299555!2d-97.10174538501438!3d18.857478787213594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c502ac163215b7%3A0xa19845629baa671d!2sNorte+16-A+71%2C+Emiliano+Zapata+Nte.%2C+94320+Orizaba%2C+Ver.!5e0!3m2!1ses-419!2smx!4v1527472033101" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="row contenedor">
		<div class="col-sm-12 ">
		<div class="contenido wrap">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<div class="col-sm-6 ">
				<br>
				Nombre
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
				<br>
				Email
				<input type="text" class="form-control" id="correo" name="correo" placeholder="Email@ejemplo.com" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
				<br>
				Telefono
				<input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono:" value="<?php if(!$enviado && isset($Telefono)) echo $Telefono ?>">
				<br>
			</div>
			<div class="col-sm-6 ">
				<br>
				Ciudad
				<input type="text" class="form-control" id="Ciudad" name="Ciudad" placeholder="Ciudad:" value="<?php if(!$enviado && isset($Ciudad)) echo $Ciudad ?>">
				<br>
				Comentario
				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Comentario:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
			</div>
				<?php if (!empty($errores)): ?>
					<div class="alert error">
						<?php echo $errores; ?>
					</div>
				<?php elseif($enviado): ?>
					<div class="alert success">
						<p>Enviado Correctamente</p>
					</div>
				<?php endif ?>
				<input type="submit" name="submit" class="btn btn-default" value="Enviar">
			</form>
		</div>
	</div>

</div>
</div>

<?php require 'footer.view.php' ?>
