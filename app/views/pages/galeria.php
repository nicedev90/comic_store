<?php require APPROOT . '/views/pages/partials/header.php'; ?>

<div class="flex p-2 bg-primary text-xl text-white">
	<div class="flex w-1/2 justify-start">
		<a href="<?= URLROOT ?>"><img src="<?php echo URLROOT; ?>/img/logo.png" alt="imagen logo" class="w-12 h-12"></a>
	</div>

	<div class="flex w-full text-xl items-center font-bold space-x-2 justify-around">
		<a href="<?php echo URLROOT . '/users/login' ?>"> capitulos</a>

		<a href="<?php echo URLROOT . '/users/login' ?>">fundador</a>

		<a href="<?php echo URLROOT . '/users/login' ?>">Contacto</a>

		<a href="<?php echo URLROOT . '/users/login' ?>"><i class="fa-solid fa-user fa-1x"></i> INICIAR SESSION</a>
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




					<a class="bg-cta text-dark" href="<?php echo URLROOT . '/users/galeria/' . str_replace(" ","_",$comic->nombre) ?>"> COMPRAR</a>

			<br><br>
		</div>

	<?php endforeach; ?>

 <!-- Include the PayPal JavaScript SDK -->
<div id="paypal-button-container"></div>


sb-ekggd25245059@business.example.com

sb-cum0m25245058@personal.example.com


<?php require APPROOT . '/views/pages/partials/footer.php'; ?>