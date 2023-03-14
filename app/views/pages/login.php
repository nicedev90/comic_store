<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css">
  <title> <?php echo APPNAME; ?> </title>
</head>
<body>

  <div id="login_wrapper" class="flex flex-col min-h-screen">
    
      <div id="bg_video" class="hidden md:block mx-auto">

        <!-- <a href="https://geeksforgeeks.org" class="absolute text-center top-10 right-96 w-96 z-20 text-2xl text-white bg-dark bg-opacity-90 rounded-xl">  GeeksforGeeks   </a> -->

        <video src="<?= URLROOT ?>/img/bg_video_1.mp4" className="absolute z-10 w-auto min-w-full min-h-full max-w-none object-cover" type="video/mp4" autoplay muted loop>
        </video>
      </div>
     

      <!-- flex form section -->
      <section id="form_login" class="flex flex-col items-center">
        
        <div class="flex absolute w-11/12 rounded-2xl bg-white px-8 py-6 mx-auto top-10 md:left-20 md:top-64 shadow-lg border-primary border-8 shadow-primary md:w-1/3">
          <!-- form login -->
          <form class="flex flex-col" action="<?php echo URLROOT; ?>/pages/login" method="post">
            
            <div class="mb-10 space-y-2 ">
              <div class="flex items-center justify-around mx-6">
                <img class="w-16 h-16" src="<?php echo URLROOT; ?>/img/logo-login.png" alt="">
                <img class="w-36" src="<?php echo URLROOT; ?>/img/logo-letra.png" alt="">
              </div>

              <?php if(isset($data['error'])) : ?>
              <div class="w-full p-2 bg-neutral text-center text-lg text-dark">
                 <?php echo $data['error']; ?>
              </div>
              <?php endif; ?>
              <?php showAlert(); ?>
            </div>

            <div id="user-group" class="relative flex flex-col mb-6 space-y-1">

              <label for="email" class="text-primaryDark text-lg font-bold">Usuario</label>
              <div class="flex border-primaryDark border-b-2 items-center p-2">
                <input id="email" type="text" name="email" class="w-full text-sm focus:outline-none" placeholder="Ingrese su correo" required>
              </div>

              <div id="user-check" class="absolute bottom-0 left-0 w-full h-1 "></div>
            </div>

            <div id="pass-group" class="relative flex flex-col mb-10 space-y-1">

              <label for="email" class="text-primaryDark text-lg font-bold">Contraseña</label>        
              <div class="flex border-primaryDark border-b-2 items-center p-2">
                <input id="password" type="password" name="password" class="w-full text-sm focus:outline-none" placeholder="Ingrese su contraseña" required>
                
              </div>

            </div>

            <div class="flex flex-col space-y-4 items-center mb-6 mx-auto">
              <button type="submit" class="w-44 px-6 py-3 rounded-full font-bold text-white bg-primary hover:bg-primaryDark">INICIAR SESION</button>

              <a class="w-44 px-8 py-3 cursor-pointer hover:rounded-full font-bold text-primary hover:text-white hover:bg-primaryDark">REGISTRARSE</a>

              <a class="w-fit cursor-pointer p-1 hover:border-primary hover:border-b-2 text-dark">Olvidé mi contraseña</a>
            </div>
      
          </form> 
          
          <div class="w-1/2 md:w-1/3"></div>
          <!-- <div class="absolute top-[180px] left-[240px] md:top-[330px] md:left-[310px]"> -->
          <div class="w-1/2 absolute top-24 -right-5 md:top-10 md:right-0">
            <img src="<?php echo URLROOT; ?>/img/login-side.png" alt="imagen logo">
          </div> 

        </div>

         
      </section>


      <!-- footer -->
      <footer class="bg-primaryDark mt-auto">
        <div class="flex justify-center space-x-2 py-1 text-center text-white">
          <a href="https://www.grupoperti.com.mx/page/inicio" target="_blank"><?= 'Diseñado por @nicedev90 &copy;  ' . date('Y') ?></a>
        </div>
      </footer>
  </div>

</body>
</html>