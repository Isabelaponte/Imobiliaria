<?php
    $nome=$_POST['nome'];
    $celular=$_POST['tel'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    include("conexao.php");

    mysqli_select_db($conexao, "bd_imobiliaria");

    $sql = mysqli_query($conexao, "INSERT INTO corretor(nome, email, senha, celular) VALUES('$nome', '$email', '$senha', $celular)") or die(mysqli_connect_error());
    
    mysqli_close($conexao);
?>