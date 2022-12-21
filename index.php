<?php
// conección
$conn = mysqli_connect('localhost','root','','contact_form') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>diseño de sitio web de dentista responsive </title>

   <!-- enlace de fuentes  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- enlace bootstrap   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- enlace de archivo css personalizado  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- comienza la sección de encabezado  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Cuidado<span> Dental.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">Sobre</a>
            <a href="#services">Servicios</a>
            <a href="#reviews">Reseñas</a>
            <a href="#contact">contactos</a>
         </nav>

         <a href="#contact" class="link-btn">REALIZAR CITA</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- termina la sección del encabezado -->

<!-- comienza la sección de inicio  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>DÉJANOS ILUMINAR TU SONRISA</h3>
            <p>Para conseguir el éxito la primera norma es tan sencilla como aprender a sonreír.</p>
            <a href="#contact" class="link-btn">Realizar Cita</a>
         </div>
      </div>

   </div>

</section>

<!-- termina la sección de inicio -->

<!-- acerca de la sección comienza  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>Sobre Nosotros</span>
            <h3>Verdadera Atención Médica Para Su Familia</h3>
            <p>Nos destacamos por ser una clínica dental con un alto nivel tecnológico, tanto para ofrecer atenciones donde el riesgo de contaminación entre pacientes o con el personal clínico es mínimo, como para reducir la cantidad de sesiones necesarias para los tratamientos, ya que ocupamos sistemas de fabricación de restauraciones que nos permiten eliminar la necesidad de depender de un laboratorio externo, reduciendo la cantidad de etapas y errores humanos posibles.</p>
            <a href="#contact" class="link-btn">Realizar Cita</a>
         </div>

      </div>

   </div>

</section>

<!-- sobre los extremos de la sección -->

<!-- comienza la sección de servicios  -->

<section class="services" id="services">

   <h1 class="heading">nuestros Servicios</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Especialista En Alineación</h3>
         <p>La sonrisa es una curva que lo endereza todo.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Odontología Cosmética</h3>
         <p>La sonrisa es una curva que lo endereza todo.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Expertos En Higiene Bocal</h3>
         <p>La sonrisa es una curva que lo endereza todo.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Periodoncia Y Estetica Periodontal</h3>
         <p>La sonrisa es una curva que lo endereza todo.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Asesoramiento Dental En Vivo</h3>
         <p>La sonrisa es una curva que lo endereza todo.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Endodoncia</h3>
         <p>La sonrisa es una curva que lo endereza todo.</p>
      </div>

   </div>

</section>

<!-- termina la sección de servicios -->

<!-- comienza la sección del proceso -->

<section class="process">

   <h1 class="heading">Proceso De Trabajo</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Periodoncia y Estetica periodontal</h3>
         <p>Especialidad dedicada a tratar enfermedades de la encía como Gingivitis (inflamación de la encía), Periodontitis (inflamación asociada a pérdida de hueso) y otras enfermedades asociadas a estos tejidos, eliminando el sarro y bacterias que las causan. Además, se realizan tratamientos de estética de encía, trabajando con microscopio para procedimientos de microcirugía.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Odontología Pediátrica</h3>
         <p>Especialidad dedicada a atender niños/as, que involucra procedimientos de prevención (limpiezas, flúor, sellantes), enseñar sobre higiene oral tanto a los niños como a los padres, tratamientos de caries (restauraciones, tratamientos de conducto), para que logren mantener una salud buco-dental óptima.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Implantes Dentales</h3>
         <p>Especialidad dedicada a la recuperación de una o más piezas dentales de manera a fija, al colocar un implante de titanio en el hueso (similar a poner un tornillo en la pared), donde después colocamos una pieza cerámica, que cumpla las necesidades funcionales y estéticas.</p>
      </div>

   </div>

</section>

<!-- finaliza la sección de proceso-->

<!-- comienza la sección de reseñas  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> Clientes </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Un equipo excepcional. Nos han atendido estupendame a mi hijo y a mi. Estamos muy satisfechos con los resultados. Incluso hemos recomendado a dos amigos que ya tenían otros presupuestos.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mateo Ducios</h3>
         <span>Cliente Satisfecho</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Sin duda, la mejor clínica dental del momento. Comenzando por el trato maravilloso de la recepcionista Jennifer, el excelente trabajo y profesionalidad del los doctores Carlos y Juan. El riguroso y perfecto trabajo de la Doctora de Estética Roxy, entre otros, que forman un súper equipo de profesionales; a manos del director German quien hace posible día a día que todo funcione a la perfección. Cuando los conozcas, nunca más dejarás de sonreír. Gracias.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marta Lopez</h3>
         <span>Cliente Satisfecho</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Ambiente agradable con un trato exquisito y profesional. Emplean la última tecnología y tiene precios razonables. Lo recomiendo tanto para niños como para adultos.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alejandro Peralta</h3>
         <span>Cliente Satisfecho</span>
      </div>

   </div>

</section>

<!-- termina la sección de reseñas -->

<!-- comienza la sección de contacto  -->

<section class="contact" id="contact">

   <h1 class="heading">Realizar Cita</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>Tu Nombre :</span>
      <input type="text" name="name" placeholder="Ingrese su nombre" class="box" required>
      <span>Tu Correo Electrónico :  :</span>
      <input type="email" name="email" placeholder="Ingrese su email" class="box" required>
      <span>Tu Número De Celular :</span>
      <input type="number" name="number" placeholder="ingrese su celular" class="box" required>
      <span>Fecha De Cita:</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="Realizar Cita" name="submit" class="link-btn">
   </form>  

</section>

<!-- extremos de la sección de contacto -->

<!-- comienza la sección de pie de página  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Número de celular</h3>
         <p>261-4772235</p>
         <p>261-4562235</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Nuestra Dirección</h3>
         <p>General Paz 445</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Horario De Apertura</h3>
         <p>00:07am a 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Dirección De Correo Electrónico</h3>
         <p>odontoinfo@gmail.com</p>
         <p>clinicondotlogica@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. web virginia</span>  </div>

</section>

<!-- termina la sección de pie de página -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>