<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>
  
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   

<section class="header">
   <a href="home.php" class="logo">Cashback+</a>
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">sobre</a>
      <a href="package.php">Lojas Cashback</a>
      <a href="book.php">Fale conosco</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="heading" style="background:url(images/header-bg-8.jpg) no-repeat">
   <h1>Fale Conosco</h1>
</div>

<section class="booking">
   <h1 class="heading-title">Mande sua Duvida!</h1>
   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>Nome :</span>
            <input type="text" placeholder="Nome" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Email" name="email">
         </div>
         <div class="inputBox">
            <span>Telefone :</span>
            <input type="number" placeholder="Telefone" name="phone">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="Data de Nascimento">
         </div>
         <div class="inputBox">
            <span>Comentarios :</span>
            <input type="text" type="submit" value="Digite aqui sua mensagem">
         </div>
      </div>
      <input type="submit" value="Enviar" class="btn" name="Enviar">
   </form>
</section>

<section class="footer">
   <div class="box-container">
         <div class="box">
            <h3>Links rápidos</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> Sobre</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> Lojas Cash</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>
         <div class="box">
            <h3>Extras</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> Duvidas?</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Sobre cashback+</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Politica de Privacidade</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Termos de uso</a>
         </div>
         <div class="box">
            <h3>Contato</h3>
            <a href="#"> <i class="fas fa-phone"></i> (51) 99521 - 7694 </a>
            <a href="#"> <i class="fas fa-phone"></i> (+11) 22222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> brunogrighes@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Porto Alegre, RS - Brasil </a>
         </div>
         <div class="box">
            <h3> Siga o cashback+</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>
      </div>
   <div class="credit"> Criado por <span>Bruno Righes</span> | Todos os direitos reservados! </div>
</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>