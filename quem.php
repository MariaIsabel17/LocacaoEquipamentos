<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> Locação de Equipamentos </title>
    	<meta name="description" content="Site especializado em reservar equipamentos escolares">
    	<meta name="keywords" content="Agência digital, Marketing, Sites">
    	<meta name="robots" content="index, follow">



    	<link rel="stylesheet" href="css/style.css">  

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    	
      <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    	
    </head>
    <body>

       
        <header class="cabecalho container">
           <a href="home.php"><h1 class="logo"> Locação de equipamentos - Especializada em reservas de equipamentos escolares </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav style="z-index: 99;" class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                   <li><a href="home.php">Home</a></li>
                   <li><a href="login.php">Login</a></li>
                   <li><a href="quem.php">Quem somos</a></li>
                   
                  
               </ul>
           </nav>          
        </header>

    <slider class="slide">
      <slide>
          <img src ="images/img1.jpg" alt="img1.jpg" style="width: 100%; height: 500px;  position: absolute; ;">
      </slide>
      <slide>
          <img src="images/img2.jpg"  alt="img2.jpg" style="width: 100%; height: 500px;position: absolute; ">
      </slide>
      <slide>
          <img src="images/img3.jpg"  alt="img3.jpg" style="width: 100%; height: 500px; position: absolute;">
      </slide>
      <slide>
          <img src="images/img4.jpg"  alt="img4.jpg" style="width: 100%; height: 500px;  position: absolute; ">
      </slide>
   </slider>
,</div>
 <div id="container" style="margin-top: 400px;"> 
        <div class="box">
            <div class="imgBox">
               
            </div>
            <P>O sistema foi fundada no ano de 2019 na cidade São Miguel pelo Tecnicos em Informatica e sua principal missão é oferecer aos professores da instituição uma melhor qualidade em reservas.</p>
            <h4>testes para o nome<br><span>teste para o nome</span></h4>
        </div>

        <div class="box">
            <div class="imgBox">
               
            </div>
            <P>Email: locacaodeequipa@gmail.com<br>
               Contato: 3353-8978<br>
               End.: Rua 13 de maio<br>
               Numero: 21<br></p>
            <h4>testes para o nome<br><span>teste para o nome</span></h4>
        </div>
    </div>


      </body>
</html>    

<style type="text/css">
 


 slider {
  display: block;
  width: 100%;
  margin-top: 90px;
  height: 500px;
  overflow: hidden;
  position: absolute;
}



.slide {
  z-index: 1;
}

 slider > * {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  animation: slide 12s infinite;
  overflow: hidden;

}




slide:nth-child(1) {
  left: 0%;
  animation-delay: -1s;
  background-size: cover;
  background-position: center;
}
slide:nth-child(4) {
  animation-delay: 2s;
  background-size: cover;
  background-position: center;
}

slide:nth-child(3) {
  animation-delay: 5s;
  background-size: cover;
  background-position: center;
}

slide:nth-child(2) {
  left: 0%;
  animation-delay: 8s;
  background-size: cover;
  background-position: center;
}

slide p{
  font-family: Comfortaa;
  font-size: 70px;
  text-align: center;
  display: inline-block;
  width: 1005;
  margin-top: 340px;
  color: #fff;
}

@keyframes slide{
  0% {left: 100%; width: 100%;}
  5%{left: 0%;}
  25%{left: 0%;}
  30%{left: -100%; width: 100%;}
  30.0001%{left: -100%; width: 0%;}
  100%{left: 100%; width: 0%;}
}


#container {
  width: 100%;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  grid-gap: 20px;
  box-sizing: border-box;
  padding: 20px;
}

#container .box {

  position: relative;
  padding: 80px 40px 40px;
  transition: 0.5s;
  text-align: center;
  background: #fff;
  
}

#container .box:hover {
  background: orange;
  color: #ffffff; 
}

#container .box p {
  margin: 0;
  padding: 0;
  transition: 0.5s;

}

#container .box h4 {
  margin: 0;
  padding: 0;
  color: orange;
  transition: 0.9s;
  font-size: 18px;
  font-weight: 700;
  line-height: 20px;
  text-transform: uppercase;
  
}

#container .box h4 span {
  font-weight: 600;
  font-size: 14px;
  color: black;
  transition: 0.9s;
}

#container .box:hover p,
#container .box:hover h4,
#container .box:hover h4 span {
  color: #fff;
} 



#container .box:before {
  content: '';
  position: absolute;
  top: 20px;
  right: 40px;
  width: 80px;
  height: 80px; 
  background: url(quotes.png);
  background-size: cover;
  opacity: 0.05;
  pointer-events: none;
  transition: 0.5s;
}

#container .box:hover:before {
  transform: translateY(-60px);
  opacity: 1;

}

#container .box:after {
  content: '';
  position: absolute;
  bottom: 20px;
  left: 40px;
  width: 80px;
  height: 80px; 
  background: url(quotes.png);
  background-size: cover;
  opacity: 0.05;
  pointer-events: none;
  transition: 0.5s;
  transform: rotate(180deg) translateY(0px);
}

#container .box:hover:after {
  transform: rotate(180deg) translateY(-60px);
  opacity: 1;

}

</style>


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