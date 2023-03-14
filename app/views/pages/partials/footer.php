  <!-- footer -->
  <footer class="bg-primaryDark text-white mt-auto">
    <div class="flex flex-col justify-around px-8 space-y-4 mt-5 md:px-16 md:flex-row">

    	<div class="flex flex-col w-full items-center space-y-4 justify-center pb-5 border-dark border-b-4 md:border-none md:w-1/2">

    		<div id="btn-acordion" class="relative cursor-pointer text-2xl font-irish">
    			<h3 > Contactos <span class="md:hidden"><i id="footer-chevron" class="fas fa-chevron-up ml-4"></i></span></h3>
    		</div>

    		<div id="acordion" class="hidden md:block left-0 right-0 inset-x-0 flex flex-col w-full md:w-1/2 space-y-2">

			    	<a class="flex px-6 items-center text-xl justify-between hover:bg-cta hover:rounded-full hover:text-dark" href="<?php echo URLROOT; ?>/usuarios/panel">
							<img src="<?php echo URLROOT; ?>/img/autor1.png" alt="imagen logo" class=" h-12">
							<p>AUTOR 1</p>
						</a>

					<a class="flex px-6 items-center text-xl justify-between hover:bg-cta hover:rounded-full hover:text-dark" href="<?php echo URLROOT; ?>/usuarios/panel">
							<img src="<?php echo URLROOT; ?>/img/autor2.png" alt="imagen logo" class=" h-12">
							<p>AUTOR dasd 1</p>
						</a>

						<a class="flex px-6 items-center text-xl justify-between hover:bg-cta hover:rounded-full hover:text-dark" href="<?php echo URLROOT; ?>/usuarios/panel">
							<img src="<?php echo URLROOT; ?>/img/autor3.png" alt="imagen logo" class=" h-12">
							<p>AUTOR 1</p>
						</a>
    		</div>

    	</div>

    	<div class="flex flex-col w-full items-center space-y-4 justify-center pb-5 md:w-1/2 ">
    		<h3 class="text-2xl font-irish "> Informacion de la tienda</h3>
    		<div class="flex flex-col w-full md:w-1/2 space-y-4">

			    	<a class="flex px-2 items-center text-lg justify-between hover:border-cta hover:border-b-2 hover:text-cta" href="<?php echo URLROOT; ?>/usuarios/panel">
							<p>Aviso Legal</p>
						</a>

					<a class="flex px-2 items-center text-lg justify-between hover:border-cta hover:border-b-2 hover:text-cta" href="<?php echo URLROOT; ?>/usuarios/panel">
							<p>Enviar un email</p>
						</a>

						<a class="flex px-2 items-center text-lg justify-between hover:border-cta hover:border-b-2 hover:text-cta" href="<?php echo URLROOT; ?>/usuarios/panel">
							<p>Enviar un email</p>
						</a>

						<a class="flex px-2 pt-4 items-center text-xl font-bold justify-center" href="https://www.grupoperti.com.mx/page/inicio" target="_blank"><?php echo APPNAME . '&copy;' .  date("Y")?></a>
    		</div>

    	</div>

  
     
    </div>
  </footer>


<script src="https://www.paypal.com/sdk/js?client-id=AX7EiVX0nGcW0Y1fniAIVzeQ1rtjRJTeBj3YcqNfYMpAcxPCcOhw8H2bLmk7hyKa6TbYdeXNstyQCuPY&currency=USD"></script>
	<script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>
</html>