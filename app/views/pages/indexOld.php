<?php require APPROOT . '/views/pages/partials/header.php'; ?>

<?php require APPROOT . '/views/pages/partials/navbar.php'; ?>

	<div class="flex mx-auto">
		<img src="<?php echo URLROOT; ?>/img/banner.png" alt="imagen logo" class="object-cover w-screen">
	</div>

	<?php foreach($data['comics'] as $comic): ?>

		<div class="mx-auto p-4 pt-10 w-full md:w-1/2">
			<p class="text-xl bg-dark text-white"><?= $comic->nombre ?></p>
			<p class="text-xl bg-dark text-white"><?= $comic->genero ?></p>
			<p class="text-xl bg-dark text-white"><?= $comic->estado ?></p>
			<br>
			<p class="text-xl bg-dark text-white"><?= utf8_encode($comic->descripcion) ?></p>
			<br>
			<a class="bg-cta text-dark" href="<?php echo URLROOT . '/pages/galeria/' . str_replace(" ","_",$comic->nombre) ?>"> Ver detalles</a>

			<br><br>
		</div>
	<?php endforeach; ?>


	<div class="w-44 p-5 bg-cta hover:translate-x-2 hover:skew-y-12 md:transform-none">
  Lorem ipsum, dolor sit, amet consectetur adipisic
</div>

<div class="relative w-1/2 mx-auto h-96">
	<div class="h-32 w-3/4 px-6 bg-cta text-xl skew-y-5 mx-auto whitespace-normal text-ellipsis">
		Lorem, ipsum, dolor. Lorem ipsum dolor sit amet consectetur 

	</div>

		<div class="absolute h-32 w-1/4 px-6 bg-cta right-0 text-xl top-0 skew-x-[35deg] after:skew-y-[35deg] mx-auto ">
	</div>
</div>

<button class="w-44 p-4 tracking-wide rounded-full text-white hover:font-bold text-2xl bg-ctaDark hover:bg-ctaLight hover:text-dark">Boton</button>

<!-- <div id="mobile-footer" class=" bg-primary text-xl w-1/2 mx-auto mb-4">

	<div id="btn-acordion" class="relative cursor-pointer  w-64 bg-cta mx-auto">
		titulo del acordeon
	</div>
	<div id="acordion" class=" hidden w-64 bg-dark p-4 m-auto left-0 right-0 inset-x-0">
		cuerpo del acordeon Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quo eaque ipsum dolor praesentium vitae magnam, quas harum natus at sunt dicta assumenda adipisci rerum et maxime, necessitatibus dolorem totam!
	</div>

</div> -->







<?php require APPROOT . '/views/pages/partials/footer.php'; ?>