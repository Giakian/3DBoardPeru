<?php include('includes/header.php'); ?>
	<section>
		<div class="novedades">Contacto</div>
		<div class="contact_contenido">
			<p>Atención al Cliente:</p>
			<p>Direccion: Exprom E.I.R.L- Calle Juan Soto Bermeo Nº 406. Local 19. Urb. El Totoral Surco, Lima 33</p>
			<p>Telf: (511) 557 8371Cel (RPC): (51) 997520684</p>
			<p>Email: VENTAS@EXPROMPERU.COM</p>
		</div>
		<div class="googmap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.2526682003995!2d-76.99450360945532!3d-12.145960478565632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b8114c37afeb%3A0xfa7f47af4b7f649a!2sJuan+Soto+Bermeo%2C+Santiago+de+Surco!5e0!3m2!1ses!2spe!4v1418584682762" frameborder="0" style="border:0"></iframe>
		</div>
		<article class="form_cont">
			<form class="miformulario" action="enviar.php" method="POST">
				<label>*Nombre:</label>
				<input type='text' id='nombre' name="nombre" class="campo" placeholder='Escribe aqui tu Nombre' required />
				<label>*E-mail:</label>
				<input type='email' id='asunto' name="asunto" class="campo" required/>
				<label>*Asunto:</label>
				<textarea name="asunto" id="" name="email" cols="30" rows="10" placeholder='Escriba aqui su e-mail' required></textarea>
				<input type="submit" id="btnenviar" value="Enviar Datos" class="boton" />
			</form>
		</article>
	</section>
<?php include('includes/footer.php'); ?>