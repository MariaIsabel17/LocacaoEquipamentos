<?php 
    require('conexao.php');

    session_start();

    if(isset($_SESSION['session_aid'])){
        $sql = "SELECT * FROM professores WHERE id_professor = '".$_SESSION['session_aid']."' ";
        $query = mysqli_query($con, $sql);

        $dados = mysqli_fetch_assoc($query);

        $nome = $dados['nome_professor'];
        $foto = $dados['foto_professor'];

        if(isset( $_GET['id'])  && isset( $_GET['type']) ) {

        }else{
            header('location:index.php');
        }

    }else{
        header('location:login.php');
    }



    // função para sair 
    if(isset($_GET['sair'])){
        session_destroy();
    }

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="agendamento.css">
    
</head>

<body>

        <header>
                <div class="main-header">
                    <div class="title-header">
                        <label> <a href="index.php"> Reservation System </a>  </label>
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
        <article>
            <div class="main">

                <?php 

                $bd = $_GET['type'];
                $id = $_GET['id'];

                $sql = 'SELECT * FROM '.$bd.' WHERE id_'.$bd.' = '.$id.' ';
                $query = mysqli_query($con, $sql);

             
                while( $dados =  mysqli_fetch_assoc($query) ){

                    echo'
                        <div class="espaco">
                            <div class="title-espaco">
                                <label> '.$dados['nome_'.$bd.''].'  </label>
                            </div>
                            <img src="./images/'.$dados['foto_'.$bd.''].'" />
                         </div>
    
                    ';}
                ?>

               



                <div class="agendamento">
                    <table class="table-agendamento">
                        <thead>
                            <th> # </th>
                            <th> HORARIO</th>
                            <th>  DATA </th>
                            <th> SITUAÇÃO </th>
                        </thead>
                        
                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='1' AND data_reserva='".date('Y-m-d')."'";
                                $query = mysqli_query( $con , $sql);
                                
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }

                                
                            ?> 
                        >        
                        <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='1' AND data_reserva='".date('Y-m-d')."'  AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=1&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=1&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 1° AULA 7:20 ~ 8:10 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td>
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='1' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                            
                        </tr>
                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='2' AND data_reserva='".date('Y-m-d')."'  ";
                                $query = mysqli_query( $con , $sql);
                                
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }
                            ?> 
                        >
                        <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='2' AND data_reserva='".date('Y-m-d')."' AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=2&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=2&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 2° AULA 8:10 ~ 9:00 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td>
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='2' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                        </tr>
                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='3' AND data_reserva='".date('Y-m-d')."'   ";
                                $query = mysqli_query( $con , $sql);
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }
                            ?> 
                        >
                        <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='3' AND data_reserva='".date('Y-m-d')."'  AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=3&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=3&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 3° AULA 9:20 ~ 10:10 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td> 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='3' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                        </tr>
                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='4'  AND data_reserva='".date('Y-m-d')."'  ";
                                $query = mysqli_query( $con , $sql);
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }
                            ?> 
                        >
                        <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='4' AND data_reserva='".date('Y-m-d')."' AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=4&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=4&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 4° AULA 10:10 ~ 11:00 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td>
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='4' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                        </tr>
                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='5' AND data_reserva='".date('Y-m-d')."'  ";
                                $query = mysqli_query( $con , $sql);
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }
                            ?> 
                        >
                        <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='5' AND data_reserva='".date('Y-m-d')."' AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=5&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=5&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 5° AULA 11:00 ~ 11:50 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td>
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='5' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                        </tr>
                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='6'AND data_reserva='".date('Y-m-d')."'   ";
                                $query = mysqli_query( $con , $sql);
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }
                            ?> 
                        >
                        <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='6' AND data_reserva='".date('Y-m-d')."' AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=6&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=6&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 6° AULA 13:20 ~ 14:10 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td>
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='6' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                        </tr>
                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='7'AND data_reserva='".date('Y-m-d')."'    ";
                                $query = mysqli_query( $con , $sql);
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }
                            ?> 
                        >
                        <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='7' AND data_reserva='".date('Y-m-d')."' AND id_professor = '". $_SESSION["session_aid"]."' AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=7&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=7&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 7° AULA 14:10 ~ 15:00 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td>
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='7' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                        </tr>
                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='8' AND data_reserva='".date('Y-m-d')."' ";
                                $query = mysqli_query( $con , $sql);
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }
                            ?> 
                        >
                        <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='8' AND data_reserva='".date('Y-m-d')."' AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=8&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=8&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 8° AULA 15:20 ~ 8:10 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td>
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='8' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                        
                        </tr>

                        <tr 
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='9' AND data_reserva='".date('Y-m-d')."' ";
                                $query = mysqli_query( $con , $sql);
                                $disabled = "";

                                if(mysqli_num_rows($query)){
                                    echo"class='agendado'";
                                    
                                    $disabled = true;
                                }
                            ?> 
                        >   
                            



                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='9' AND data_reserva='".date('Y-m-d')."' AND id_professor = '". $_SESSION["session_aid"]."' ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo'
                                    <td style="background:red;" ><a href="?id='.$id.'&&type='.$bd.'&aula=9&cancelar=true";>  CANCELAR  </a> </td>
                                    ';
                                }else{
                                    if($disabled == true){
                                        echo'
                                        <td><a >  INDISPONIVEL  </a> </td>
                                        ';
                                    }else{
                                    echo'
                                        <td><a href="?id='.$id.'&&type='.$bd.'&aula=9&agendar=true";>  AGENDAR</a> </td>
                                        ';
                                    }
                                }
                            ?> 
                            <td> 9° AULA 7:20 ~ 8:10 </td>
                            <td> <?php echo date('Y-m-d') ?> </td>
                            <td>
                            <?php  
                                $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='9' AND data_reserva='".date('Y-m-d')."'  ";
                                
                                $query = mysqli_query( $con , $sql);
                                
                                if(mysqli_num_rows($query)){
                                    echo"AGENDADO";
                                }else{
                                    echo"DISPONIVEL";
                                }
                            ?> 
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </article>
    </main>

    <footer class="main-footer">
        <!--   rodapé  -->
     </footer>
</body>

</html>

<?php

if(isset($_GET['cancelar'])){
    $sql = "DELETE FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='".$_GET['aula']."' AND data_reserva='".date('Y-m-d')."'  AND id_professor = '" . $_SESSION['session_aid']. "' ";
    $query = mysqli_query($con, $sql);
    echo"
            <script> location.href = document.referrer;  </script>
    ";
}


if(isset($_GET['agendar'])){

    $sql = "SELECT * FROM reservas WHERE id_equipamento='$id' AND tipo_reserva = '$bd' AND aula_reserva='".$_GET['aula']."' AND data_reserva='".date('Y-m-d')."'  AND id_professor = '" . $_SESSION['session_aid']. "'  ";
    $query = mysqli_query( $con , $sql);

    if(mysqli_num_rows($query)){
        echo" <script> alert('$bd já está agendado nesta aula  hoje!'); location.href = document.referrer;  </script> ";
    }else{

    
        $sql = "INSERT INTO reservas ( id_professor, id_equipamento, data_reserva, aula_reserva, tipo_reserva )
            VALUES
        ('" . $_SESSION['session_aid'] ."', '".$id."', '".date('Y-m-d')."', '".$_GET['aula']."', '$bd')";
        $query = mysqli_query($con, $sql);

        echo"
            <script> location.href = document.referrer;  </script>
        ";  
    }

}
?>
