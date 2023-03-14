<?php require APPROOT . '/views/pages/partials/header.php'; ?>
<?php require APPROOT . '/views/pages/partials/navbar.php'; ?>

<!-- <div class="flex p-2 bg-primary text-xl text-white">
	<div class="flex w-1/2 justify-start">
		<a href="<?= URLROOT ?>"><img src="<?php echo URLROOT; ?>/img/logo.png" alt="imagen logo" class="w-12 h-12"></a>
	</div>

	<div class="flex w-full text-xl items-center font-bold space-x-2 justify-around">
		<a href="<?php echo URLROOT . '/pages/login' ?>"> capitulos</a>

		<a href="<?php echo URLROOT . '/pages/login' ?>">fundador</a>

		<a href="<?php echo URLROOT . '/pages/login' ?>">Contacto</a>

		<a href="<?php echo URLROOT . '/pages/login' ?>"><i class="fa-solid fa-user fa-1x"></i> INICIAR SESSION</a>
		<input type="hidden" id="user_nombre" value="<?php echo isset($_SESSION['user_nombre']) ? 1 : 2 ?>">
	</div>

	
</div> -->

	<div class="flex mx-auto">
		<img src="<?php echo URLROOT; ?>/img/banner.png" alt="imagen logo" class="object-cover w-screen">
	</div>

			<?php foreach($data['comic'] as $comic): ?>

	<div class="flex-col md:flex-row p-2 md:px-16 mt-5 mx-auto ">

		<div id="col-izq" class="md:w-1/2">
				<div class="mx-auto p-2 pt-5">
					<p class="text-2xl font-bold bg-dark text-white"><?= $comic->nombre ?></p>
					<p class="text-lg bg-dark text-white"><?= $comic->genero ?></p>
					<p class="text-lg bg-dark text-white"><?= $comic->estado ?></p>
					<p class="text-lg bg-dark text-white"><?= $comic->created_at ?></p>
					<br>

					<!-- <p class="text-lg bg-dark text-white"><?= utf8_encode($comic->descripcion) ?></p> -->



				</div>
		</div>

		<div id="col-der" class=" relative md:w-1/2 ">
			<img src="<?php echo URLROOT; ?>/img/caratula1.jpg" alt="imagen logo" class="object-cover w-screen">

			<!-- <div class="absolute w-full bottom-0 bg-opacity-80 bg-gradient-to-t from-ctaDark">
				<p class="text-lg text-dark"><?= utf8_encode($comic->descripcion) ?></p>
			</div> -->

			<div class="absolute w-full bottom-0 bg-opacity-70 bg-cta ">
				<p class="text-dark"><?= utf8_encode($comic->descripcion) ?></p>
			</div>

			<div class="absolute top-0 w-3/4">
						<a id="btn_compra" class="bg-cta text-dark p-4 text-2xl font-bold" href="#"> COMPRAR</a>
					</div>
		</div>

		

	</div>

			<?php endforeach; ?>




<div id="response" class="flex flex-col space-y-5 p-4 w-96 bg-cta hidden"> 
tienes que iniciar 
	<a href="<?php echo URLROOT ?>/pages/login">INICIAR SESSION</a>

	Si no tienes cuenta puedes
	<a href="<?php echo URLROOT ?>/pages/login">Registrarte</a>

</div>


<!-- sb-ekggd25245059@business.example.com

3/^kvW,l




sb-cum0m25245058@personal.example.com

5Y-iA&tZ -->

	<div class="slider-container mx-auto flex max-w-xl h-[500px]  overflow-hidden relative bg-cta space-x-6 py-5">

		<button id="prev" class="z-10 absolute self-center h-max rounded-full p-3 text-2xl font-bold">
		  	<svg class="w-6 h-6" fill="none" stroke="bg-primary" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path> textoooo
		  	</svg>
		  </button>

		<div class="slide absolute h-96">
			<div class="flex flex-col items-center p-2 w-96 ">
			  <!-- <img src="<?php echo URLROOT; ?>/img/pag3.png" alt="imagen logo" class="object-cover"> -->
				<div class="flex flex-col p-2 items-center  w-full">
					<h2 class="mt-2 text-2xl font-bold ">Titulo</h2>
		  	  <p class="mt-2 p-4 ">

		  	  	rextooooooooooooo
		  				Lorem ipsum Lorem ipsum dolor, consectetur.
		  		</p>
		  	  <button class="mt-4 px-6 py-3 rounded-md bg-orange-600 text-white font-bold">Ver Mas</button>
				</div>  	  
		  </div>
		</div>

		<div class="slide absolute h-96">
			<div class="flex flex-col items-center p-2 w-96 ">
			  <!-- <img src="<?php echo URLROOT; ?>/img/pag4.png" alt="imagen logo" class="object-cover"> -->
				<div class="flex flex-col p-2 items-center w-full">
					<h2 class="mt-2 text-2xl font-bold ">Titulo</h2>
		  	  <p class="mt-2 p-4 ">
		  				Lorem ipsum Lorem ipsum dolor, consectetur.
		  		</p>
		  	  <button class="mt-4 px-6 py-3 rounded-md  text-white font-bold">Ver Mas</button>
				</div>  	  
		  </div>
		</div>

		<div class="slide absolute h-96">
			<div class="flex flex-col items-center p-2 w-96 ">
			  <img src="<?php echo URLROOT; ?>/img/pag5.png" alt="imagen logo" class="object-cover">
				<div class="flex flex-col p-2 items-center  w-full">
					<h2 class="mt-2 text-2xl font-bold">Titulo</h2>
		  	  <p class="mt-2 p-4 ">
		  				Lorem ipsum Lorem ipsum dolor, consectetur.
		  		</p>
		  	  <button class="mt-4 px-6 py-3 rounded-md  text-white font-bold">Ver Mas</button>
				</div>  	  
		  </div>
		</div>


		
		<button id="next" class="z-10 right-0 absolute self-center h-max rounded-full p-3  text-2xl font-bold">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
			</svg>
		</button>

	</div>




<!-- <img src="<?php echo URLROOT; ?>/img/pag5.png" alt="imagen logo" class="object-cover"> -->




<script>    

const slides = document.querySelectorAll('.slide')
slides.forEach((slide, index) => {
	slide.style.transform = `translateX(${index * 100}%)`
})

let maxSlide = slides.length -1
let currentSlide = 0

const nextBtn = document.querySelector('#next')
nextBtn.addEventListener('click', () => {
	// check if current slide is the last and reset currentSlide counter
	if(currentSlide === maxSlide) {
		currentSlide = 0
	} else {
		currentSlide++
	}

	//  move slide by -100%
	slides.forEach((slide, index) => {
		slide.style.transform = `translateX(${100 * (index - currentSlide)}%)`
	})
})

const prevBtn = document.querySelector('#prev')
prevBtn.addEventListener('click', () => {
	if(currentSlide === 0) {
		currentSlide = maxSlide
	} else {
		currentSlide--
	}

	slides.forEach((slide, index) => {
		slide.style.transform = `translateX(${100 * (index - currentSlide)}%)`
	})
})

</script>



<?php require APPROOT . '/views/pages/partials/footer.php'; ?>