<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> Locação de Equipamentos </title>
    	<meta name="description" content="Site especializado em reservar equipamentos escolares">
    	<meta name="keywords" content="Reservas">
    	<meta name="robots" content="index, follow">
    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    	<link rel="icon" href="img/icon.png">
    </head>
    <body>
         
        <header class="cabecalho container">
           <a href="home.php"><h1 class="logo"><img src="images/2.png" style="margin-top: -55px;"> Locação de equipamentos - Especializada em reservas de equipamentos escolares </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                   <li><a href="home.php">Home</a></li>
                   <li><a href="login.php">Login</a></li>
                   <li><a href="quem.php">Quem somos</a></li>
              </ul>
           </nav>          
        </header>
    
        <div class="banner container">
            <div class="title">
                <h2> Locação de equipamentos </h2>
                <h3> O melhor lugar para reservar seu equipamento </h3>
            </div>
            <div class="buttons">
              <a href="quem.php">
                <button class="btn btn-sobre bg-black radius">Sobre <i class="fa fa-question-circle"></i></button>
                </a>
            </div>
        </div>
        
        <main class="servicos container">
            
            <article class="servico bg-white radius">
               <a href="#"><img src="images/note.png" alt="Marketing Digital" style="width: 500px; height: 300px; margin-top: -10px;"></a>
               <div class="inner">
                   <a href="#"> Equipamentos </a>
                   <h4>O que você pode encontrar:</h4>
                   <p>Aqui você pode encontrar projetores, televsões, notebook's e
                   cabos à sua disposição em qualquer momento.</p>
               </div>
            </article>
            <article class="servico bg-white radius">
               <a href="#"><img src="images/reserva.png" alt="Criação de Sites" style="width: 270px; height: 300px; position: relative; left: 15%;"></a>
               <div class="inner">
                   <a href="#"> Como posso fazer minha reserva? </a>
                   <h4> Informações necessárias </h4>
                   <p>Você que é professor tem de criar um cadastro no administrador,
                   assim precisando somente logar sua conta e agendar sua reserva.</p>
               </div>
            </article>
            <article class="servico bg-white radius">
               <a href="#"><img src="images/amb.png" alt="Criação de Sites" style="width: 270px; height: 270px; position: relative; left: 15%; margin-top: 30px;"></a>
               <div class="inner">
                   <a href="#"> Ambientes </a>
                   <h4> O que você pode encontrar: </h4>
                   <p>Além de todo aparato técnico, você encontra a maior diversidade
                   de ambiente. Laboratórios, sala de dança, sala de teatro. </p>
               </div>
            </article>
        </main>
        
        <section class="newsletter container bg-black">
           <h2> Reserve agora! </h2>
           <h3>  Visualize a disponibilidade do equipamento ou local </h3>
           <form>
              
              <button class="bg-white radius"> Faça o seu login </button>
           </form>
        </section>
        
        <footer class="rodape container bg-gradient">
          <p class="copyright">
            Fale conosco: 
          <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100024471967937"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            
          </div>
          <p class="copyright">
            Copyright © Locação de Esquipamentos 2019. Todos os direitos reservados.
        </footer>       
        
        <!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
        $(".btn-menu").click(function(){
          $(".menu").show();
        });
        $(".btn-close").click(function(){
          $(".menu").hide();
        });
        </script>      
    </body>
</html>