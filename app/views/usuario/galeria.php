<?php require APPROOT . '/views/usuario/partials/header.php'; ?>

<div class="flex p-2 bg-primary text-xl text-white">
	<div class="flex w-1/2 justify-start">
		<a href="<?= URLROOT ?>"><img src="<?php echo URLROOT; ?>/img/logo.png" alt="imagen logo" class="w-12 h-12"></a>
	</div>

	<div class="flex w-full text-xl items-center font-bold space-x-2 justify-around">
		<a href="<?php echo URLROOT . '/users/login' ?>"> capitulos</a>

		<a href="<?php echo URLROOT . '/users/login' ?>">fundador</a>

		<a href="<?php echo URLROOT . '/users/login' ?>">Contacto</a>

		<a href="<?php echo URLROOT . '/users/login' ?>"><i class="fa-solid fa-user fa-1x"></i> INICIAR SESSION</a>
		<input type="hidden" id="user_nombre" value="<?php echo isset($_SESSION['user_nombre']) ? 1 : 2 ?>">
	</div>

	
</div>

	<?php foreach($data['comic'] as $comic): ?>

		<div class="mx-auto p-4 pt-10 w-full md:w-1/2">
			<p class="text-xl bg-dark text-white"><?= $comic->nombre ?></p>
			<p class="text-xl bg-dark text-white"><?= $comic->genero ?></p>
			<p class="text-xl bg-dark text-white"><?= $comic->estado ?></p>
			<p class="text-xl bg-dark text-white"><?= $comic->created_at ?></p>
			<br>

			<!-- Set up a container element for the button -->

					<a id="btn_compra" class="bg-cta text-dark" href="#"> COMPRAR</a>
					<a href="http://192.168.8.100/comic_store/usuarios/carrito" class="bg-cta rounded p-4 text-xl"> agregar al carrito </a>
					<a href="#" class="bg-cta rounded p-4 text-xl"> Ver carrito </a>


			<br><br>
		</div>

	<?php endforeach; ?>

 <!-- Include the PayPal JavaScript SDK -->
<div id="paypal-button-container" class="w-96 mx-auto hidden"></div>

<div id="response" class="flex flex-col space-y-5 p-4 w-96 bg-cta hidden"> 
tienes que iniciar 
	<a href="<?php echo URLROOT ?>/users/login">INICIAR SESSION</a>

	Si no tienes cuenta puedes
	<a href="<?php echo URLROOT ?>/users/login">Registrarte</a>

</div>





<?php require APPROOT . '/views/usuario/partials/footer.php'; ?>