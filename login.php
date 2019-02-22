<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Locação de Equipamentos</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
    
</head>

<body background="images/lala.png">
	<input type="checkbox" id="bt-menu"> 
	<label for="bt-menu">&#9776;</label>

	<nav class="menu">
	    <ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="equipamentos.php">Equipamentos</a></li>
			<li><a href="ambientes.php">Ambientes</a></li>
			<li><a href="reservas.php">Reservas</a></li>
			<li><a href="cadastrar.php">Cadastrar</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
    </nav>

    <div>
    	
    	<div class="tela">
    		<form method="post">
                <label for="email">Email</label>
        		<input type="text" name="email" placeholder="Email">

        		<label for="password">Senha</label>
        		<input type="password" name="senha">

        		<input type="submit" name="login" value="Entrar"> 
            </form>
    	</div>
    </div>
</body>
</html>


<?php 

$con = mysqli_connect(
    "localhost",
    "root",
    "",
    "locacao2"
);

if(isset($_POST['login'])){


$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM  usuarios  WHERE email = '".$email."' && senha = '".$senha."' ";

$query = mysqli_query($con, $sql);

if($query){
    echo"<script> alert('usuario existe !') </script>";
}else{
    echo"<script> alert(' ! email ou senha incorreto !') </script>";
}
}

 ?>

