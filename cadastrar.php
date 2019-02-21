<!DOCTYPE html>
<html>
   
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Locação de Equipamentos</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	 <link rel="stylesheet" href="css/estilos.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>


<body>
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

    <section class="form_wrap">

        <section class="cantato_info">
            <section class="info_titulo">
                <h2>Informações<br>de contato</h2>
            </section>
            <section class="info_itens">
           
            </section>
        </section>

        <form action="cadastrar.php" method="post" class="form_contato">
            <h2>Sistema de Cadastro</h2>
            <div class="user_info">
                <label for="names">Nome</label>
                <input type="text" id="names" name="nome" required>

                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" required>

                <label for="email">Senha</label>
                <input type="text" id="email" name="senha" required>

                <label for="phone">Telefone</label>
                <input type="text" id="phone" name="telefone" required>

                <input type="submit" name="cadastrar" value="Cadastrar" id="btnSend">
   
    </section>

</body>
</html>

<?php 

//conexao banco
$con = mysqli_connect(
	"localhost",
	"root",
	"",
	"locacao2"
);


if(isset($_POST['cadastrar'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];

	$sql = "INSERT INTO cadastrar ( nome, email, senha, telefone)
		VALUES
	('".$nome."', '".$email."', '".$senha."', '".$telefone."')";
	$query = mysqli_query($con, $sql);

	if($query){
		echo" <script>  alert('Cadastro realizdo com sucesso !') </script>	 ";
	}
}

 ?>
