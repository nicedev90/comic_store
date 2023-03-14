<?php require APPROOT . '/views/pages/partials/header.php'; ?>

<?php require APPROOT . '/views/pages/partials/navbar.php'; ?>

	<div class="flex mx-auto">
		<img src="<?php echo URLROOT; ?>/img/banner.png" alt="imagen logo" class="object-cover w-screen">
	</div>

	<?php foreach($data['comics'] as $comic): ?>

		<div class="mx-auto p-2 pt-10 w-full md:w-1/2">
			<p class="text-lg bg-dark text-white"><?= $comic->nombre ?></p>
			<p class="text-lg bg-dark text-white"><?= $comic->genero ?></p>
			<p class="text-lg bg-dark text-white"><?= $comic->estado ?></p>
			<br>
			<p class="text-lg bg-dark text-white"><?= utf8_encode($comic->descripcion) ?></p>
			<br>
			<a class="bg-cta text-dark" href="<?php echo URLROOT . '/pages/galeria/' . str_replace(" ","_",$comic->nombre) ?>"> Ver detalles</a>

			<br><br>
		</div>
	<?php endforeach; ?>





<?php require APPROOT . '/views/pages/partials/footer.php'; ?>