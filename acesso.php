<?php
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    include("conexao.php");

    mysqli_select_db($conexao, "bd_imobiliaria");

    $sql = mysqli_query($conexao, "SELECT * FROM corretor where email='$email' and senha='$senha'") or die(mysqli_connect_error());

    $cont = mysqli_num_rows($sql);
        if($cont>0){
       	session_start();
          $_SESSION['email_usuario']=$email;
          $_SESSION['senha_usuario']=$senha;
          header("Location:listar_produto.php"); 
        }
        else{
            header("Location:index.html");
        }
        
        mysqli_close($conexao);
    ?>