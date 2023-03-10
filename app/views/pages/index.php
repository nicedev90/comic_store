<?php require APPROOT . '/views/pages/partials/header.php'; ?>

<div class="flex p-2 bg-primary text-xl text-white">
	<div class="flex w-1/2 justify-start">
		<img src="<?php echo URLROOT; ?>/img/logo.png" alt="imagen logo" class="w-12 h-12">
	</div>

	<div class="flex w-full text-xl items-center font-bold space-x-2 justify-around">
		<a href="<?php echo URLROOT . '/users/login' ?>"> capitulos</a>

		<a href="<?php echo URLROOT . '/users/login' ?>">fundador</a>

		<a href="<?php echo URLROOT . '/users/login' ?>">Contacto</a>

		<a href="<?php echo URLROOT . '/users/login' ?>"><i class="fa-solid fa-user fa-1x"></i> INICIAR SESSION</a>
	</div>

	
</div>

<div class="flex mx-auto">
		<img src="<?php echo URLROOT; ?>/img/banner.png" alt="imagen logo" class="">
	</div>



	<?php foreach($data['comics'] as $comic): ?>

		<div class="mx-auto p-4 pt-10 w-full md:w-1/2">
			<p class="text-xl bg-dark text-white"><?= $comic->nombre ?></p>
			<p class="text-xl bg-dark text-white"><?= $comic->genero ?></p>
			<p class="text-xl bg-dark text-white"><?= $comic->estado ?></p>
			<br>
					<a class="bg-cta text-dark" href="<?php echo URLROOT . '/users/galeria/' . str_replace(" ","_",$comic->nombre) ?>"> Ver detalles</a>

			<br><br>
		</div>

	<?php endforeach; ?>

<?php require APPROOT . '/views/pages/partials/footer.php'; ?>