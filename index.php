<?php 
    session_start();
    require('conexao.php');
    


    if(isset($_SESSION['session_aid'])){
        $sql = "SELECT * FROM professores WHERE id_professor = '".$_SESSION['session_aid']."' ";
        $query = mysqli_query($con, $sql);

        $dados = mysqli_fetch_assoc($query);

        $nome = $dados['nome_professor'];
        $foto = $dados['foto_professor'];
    }else{
        header('location:login.php');
    }


    // função para sair 
    if(isset($_GET['sair'])){
        session_destroy();
        header('location:index.php');
    }
   

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reservation System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>

<body>

    <header>
        <div class="main-header">
            <div class="title-header">
                <label> <a href="index.php"> Faça sua reserva </a>  </label>
            </div>
            <div class="main-usser">
                <div class="info-usser"  >
                    <img src="images/<?php echo( $foto )?>"/>
                    <label> <?php echo ( $nome )?> </label>
                    <button> <a href="?sair=true" > LOGOOFF </a> </button>
                </div>
            </div>
        </div>
    </header>

    <main>

        <article class="main-espacos">
            <div class="title-espacos">
                <label> Espaços </label>
            </div>
            <div class="list-espacos">
                <?php  
                $sql = 'SELECT * FROM espaco ';
                $query = mysqli_query($con, $sql);
                while( $dados =  mysqli_fetch_assoc($query) ){
                    echo'
                    <div class="espaco">
                        <div class="title-espaco">
                            <label> '.$dados['nome_espaco'].' </label>
                        </div>
                        <img src="./images/'.$dados['foto_espaco'].'" />
                        <button class="btn-espaco"> <a href="agendamento.php?id='.$dados['id_espaco'].'&&type=espaco"> AGENDAR</a> </button>
                     </div>
                     ';
                    
                }
                ?>
            </div>
        </article>

        <article class="main-equipamentos">
            <div class="title-equipamentos">
                <label> Equipamentos </label>
            </div>
            <div class="list-equipamentos">
                <?php  
                $sql = 'SELECT * FROM equipamento ';
                $query = mysqli_query($con, $sql);
                while( $dados =  mysqli_fetch_assoc($query) ){
                    echo'
                    <div class="equipamento">
                        <div class="title-equipamento">
                            <label> '.$dados['nome_equipamento'].' </label>
                        </div>
                        <img src="./images/'.$dados['foto_equipamento'].'" />
                        <button class="btn-equipamento"> <a href="agendamento.php?id='.$dados['id_equipamento'].'&&type=equipamento"> AGENDAR</a> </button>
                     </div>
                     ';
                    
                }
                ?>
            </div>
        </article>

    </main>
    <footer class="main-footer">

    </footer>
</body>

</html>



