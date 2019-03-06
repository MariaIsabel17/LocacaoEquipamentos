<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <input type="checkbox" id="bt-menu"> 
    <label for="bt-menu">&#9776;</label>

    <nav class="menu">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="Login.php">Login</a></li>
            
        </ul>
    </nav>
    <header>
        <div class="main-header">
            <div class="title-header">
                <label> Sistema de Reservas </label>
            </div>
        </div>
    </header>

    <main>
        <article>
            <div class="main-login">
                <form action="#" method="POST">
                    <div class="login">
                        <div class="usser-image">
                            <img src="./images/usser.png" >
                        </div>
                        <div class="input-group">
                            <label> LOGIN </label>
                            <input name="login" type="text" placeholder="E-MAIL" />
                        </div>
                        <div class="input-group">
                            <label> SENHA </label>
                            <input name="senha" type="password" placeholder="senha" />
                        </div>
                        <div >
                            
                            <input class="input_submit" type="submit" name="entrar" value="Entrar"  /> 
                        </div>

                    </div>
                </form>
            </div>
        </article>
    </main>
    <footer class="main-footer">
    </footer>
</body>

</html>
<?php

    session_start();

    if(isset($_SESSION['session_aid'])){
        
        header('location:index.php');
    }else{
        
    }

    require('conexao.php');
    
    if(isset($_POST['entrar'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = " SELECT * FROM professores WHERE email_professor = ". $login ." AND senha_professor = ". $senha  ."  ";
        $query = mysqli_query($con , $sql);

        if(mysqli_num_rows($query)){
           
            session_start();


            $dados = mysqli_fetch_assoc($query);

            $_SESSION['session_aid'] = $dados['id_professor'];
            $_SESSION['session_nome'] = $dados['nome_professor'];
            $_SESSION['session_foto'] = $dados['foto_professor'];

            header('location:index.php');
        }else{
            session_destroy();

            unset($_SESSION['session_aid']);
            unset($_SESSION['session_nome']);
            unset($_SESSION['session_foto']);


        }

    }
?>

<style>
    * {
        padding: 0;
        margin: 0;
        height: auto;
    }
    

    ::-webkit-input-placeholder {
    text-align: center;
    color:orange;
    text-transform: uppercase;
    font-style: bold;
    }

    .input_submit {
        width: 300px;
        height: 40px;
        background: black;
        color: white;
        border-color: black;
        border-radius: 10px;
    }

    .input-group {
        margin: 20px;
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        align-content: center;
        flex-direction: column;
    }

    .input-group label{
        text-align: center;
    }
    
    .usser-image img{
        width: 120px;
        height: 120px;
    }
    input {
        border-radius: 10px;
        width: 100%;
        height: 40px;
        text-align: center;
        color: orange;
        font-size: 17px;

    }

    .main-header {
        width: 100%;
        height: 100px;
        background: orange;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .title-header {
        color: white;
        font-size: 30px;
    }

    .main-login {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login {
        padding: 10px;
        margin: 10px;
        border-radius: 20px;
        width: 400px;
        height: 450px;
        background: orange;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        font-size: 30px;
        font-weight: bold;
    }


    .main-footer {
        width: 100%;
        height: 100px;
        background: orange;
    }
</style>