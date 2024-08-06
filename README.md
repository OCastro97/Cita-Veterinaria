<!-- conectar  -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Happy Pets</title>

   <link rel="icon" href="../../img/icon.png">


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/index.css">
   
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">
         <div class="navbar">
               <div class="icon">
                  <i class="fas fa-paw"></i>
                  <a href="#home" class="logo">happy<span>Pets.</span></a>
               </div>
            
               <nav class="nav">
                  <a href="#home" class="menu-nav">Inicio</a>
                  <a href="#services" class="menu-nav">Servicio</a>
                  <a href="#about" class="menu-nav">Nosotros</a>
                  <a href="#contact" class="menu-nav">Contacto</a>
                  <div class="sesionbtn">
                     <button class="btnLog">
                        <a href="./logReg/login.html" class="sesion">Iniciar Sesión</a>
                     </button>
                   </div>
                  
</nav>
               <div id="menu-btn" class="fas fa-bars"></div>
         </div>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>La Salud de su Mascota es su Prioridad</h3>
            <p>Nos enorgullece brindarle a usted y a su 
             mascota una atención personalizada.</p>
            <a href="./logReg/registerPets.php" class="link-btn">Registrate</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->


<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">Servicios</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Peluquería</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Vacunación</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Higiene dental</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Heridas</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Análisis</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Baño</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="./img/nosotros.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>sobre nosotros</span>
            <h3>Lorem, ipsum dolor sit amet consectetur</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->


<!-- process section starts  -->

<section class="process">

   <h1 class="heading">Proceso de Trabajo</h1>

   <div class="card-container container">

      <div class="card">
         <div class="face face1">
            <div class="contenido">
               <img src="./img/vacuna.png" alt="">
               <h3>Vacuna</h3>
            </div>
         </div>
         <div class="face face2">
            <div class="contenido">
            <p>Vacunamos a su mascota con todo tipo de medicina, ya sea para la rabia, para la mordida, para garrapatas, etc</p>
            </div>
         </div>
      </div>

      <div class="card">
         <div class="face face1">
            <div class="contenido">
            <img src="./img/analisis.png" alt="">
            <h3>Análisis</h3>
            </div>
         </div>
         <div class="face face2">
            <div class="contenido">
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae deserunt error esse ducimus itaque, laudantium perspiciatis </p>
            </div>
         </div>
         
      </div>

      <div class="card">
         <div class="face face1">
            <div class="contenido">
               <img src="./img/radiografia.png" alt="">
               <h3>Radiografía</h3>
            </div>
         </div>
         <div class="face face2">
            <div class="contenido">
               <p>Contamos con la radiografía sin dañar a su mascota, cuando se siente mal o cuando se accidenta.</p>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- process section ends -->



<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">Contacto</h1>

   <form autocomplete="off" action="./php/mensajesContact.php" method="POST" >
      <span>Tu nombre :</span>
      <input type="text" name="nombre" placeholder="ingrese su nombre" class="box" required>
      <span>Tu correo :</span>
      <input type="email" name="email" placeholder="ingrese su correo" class="box" required>
      <span>Tu número :</span>
      <input type="text" name="telefono" placeholder="ingrese su número" class="box" >
      <span>Mensaje :</span>
      <textarea name="mensaje" id="" cols="30" rows="4" class="box" placeholder="escribe su mensaje" required></textarea>
      <input type="submit" value="envíar" name="submit" class="link-btn" >
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<fotter class="footer">

   <div class="grupo-1">
      <div class="box">
         <div class="icon">
            <i class="fas fa-paw"></i>
            <a href="#" class="logo">happy<span>Pets.</span></a>
         </div>
      </div>
      <div class="box">
         <h2>SOBRE NOSOTROS</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, incidunt!</p>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="box">
            <h2>Siguenos</h2>
         <div class="red-social">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
         </div>
      </div>
   </div>
   <div class="grupo-2">
      <hr>
      <small>&copy; 2022 <b>Happy<span>Pets.</span></b> - Todos los derechos reservados.</small>
   </div>
</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="./js/header.js"></script>

</body>
</html>
