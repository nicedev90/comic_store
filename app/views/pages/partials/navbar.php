<nav class="hidden md:flex md:px-16 bg-primaryDark text-lg text-white tracking-wider font-irish">
	<div class="flex w-1/4 items-start">
		<a href="<?= URLROOT ?>"><img src="<?php echo URLROOT; ?>/img/logo.png" alt="imagen logo" class="ml-4 w-16 h-16"></a>
	</div>

	<div class="hidden md:flex w-full  items-center space-x-4 justify-end">
		<li class="list-none">
			<a class="py-3 px-5 <?= ($data['page'] == 'index') ? 'is-active' : 'is-inactive'; ?>" href="<?php echo URLROOT . '/pages/login' ?>"> CAPITULOS</a>
		</li>

		<li class="list-none ">
			<a class="py-3 px-5 <?= ($data['page'] == 'about-us') ? 'is-active' : 'is-inactive'; ?>" href="<?php echo URLROOT . '/pages/login' ?>"> FUNDADOR</a>
		</li>

		<li class="list-none">
			<a class="py-3 px-5 <?= ($data['page'] == 'about-us') ? 'is-active' : 'is-inactive'; ?>" href="<?php echo URLROOT . '/pages/login' ?>"> CONTACTO</a>
		</li>

		<li class="list-none">
			<div class="flex justify-center font-sans items-center  text-neutralLight text-xl  w-16 h-12 bg-cta rounded-full">
				<i class="fa-solid fa-shopping-cart mr-1"></i>
				<!-- <span>3</span> -->
			</div>
		</li>

		<li class="list-none">
			<a class="py-3 px-5 <?= ($data['page'] == 'about-us') ? 'is-active' : 'is-inactive'; ?>" href="<?php echo URLROOT . '/pages/login' ?>"><i class="fa-solid fa-user fa-1x"></i> INICIAR SESSION</a>
		</li>

	</div>

</nav>

<!-- mobile navbar -->
<nav id="navbar-mobile" class="flex justify-between px-2 bg-primaryDark md:hidden">

  <!-- mobile logo -->
  <div id="logo-mobile" class="w-1/4">
		<a href="<?= URLROOT ?>"><img src="<?php echo URLROOT; ?>/img/logo.png" alt="imagen logo" class="w-12 h-12"></a>
	</div>

	<button id="profile" class="flex justify-around items-center md:w-64 text-white px-5 py-2 rounded-t-xl bg-ctaDark hover:bg-ctaLight hover:text-dark">
		<div class="h-8 rounded-full">
			<i class="fa-solid fa-shopping-cart mr-1 fa-2x"></i>
			<!-- <span>3</span> -->
		</div>
	</button>

	<button id="profile" class="flex justify-around items-center md:w-64 text-white px-5 py-2 rounded-t-xl bg-ctaDark hover:bg-ctaLight hover:text-dark">
		<img class="h-8 rounded-full" src="<?php echo URLROOT; ?>/img/anya1.JPG" alt="">
		<p class="">Alejandra </p>
	</button>
		
  <!-- mobile hamburger menu -->
  <button id="menu-btn" class="block hamburger focus:outline-none">
    <span class="hamburger-top bg-cta"></span>
    <span class="hamburger-middle bg-cta"></span>
    <span class="hamburger-bottom bg-cta"></span>
  </button>

</nav>

<!-- mobile hamburger menu -->
<div class="md:hidden">
  <div id="menu" class="hidden bg-primary flex-col items-center text-xl text-white left-0 right-0 tracking-wider font-irish">
    <a href="#" class="w-full text-center py-4 border-t hover:bg-ctaLight hover:text-dark">Capitulos</a>
    <a href="#" class="w-full text-center py-4 border-t hover:bg-ctaLight hover:text-dark">Fundador</a>
    <a href="#" class="w-full text-center py-4 border-t hover:bg-ctaLight hover:text-dark">Contacto</a>
    <a href="#" class="w-full text-center py-4 border-t hover:bg-ctaLight hover:text-dark">Logout</a>
  </div>
</div>

