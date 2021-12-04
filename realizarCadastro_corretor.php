<?php
    include("seguranca.php");

    $nome_c = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];
    $celular = $_POST['celular'];
    $img = $_POST['img'];


    //parametros de img
    $pasta = 'img';
    $permitido = array('image/jpg','image/jpeg','image/pjpeg'); //extensões permitidas
    $img=$_FILES['img'];
    $tmp=$img['tmp_name'];
    $name=$img['name']; //nome da imagem;
    $type=$img['type'];

        include("conexao.php");
        mysqli_select_db($conexao, "bd_imobiliaria");
        require('funcao.php');
        
        if (!empty($name) && in_array($type, $permitido)) 
        {
            $nome='img-'.'jpg';
            
            upload($tmp,$img,500,$pasta); //upload + conversão da img com 500px;

            $sql = "INSERT INTO corretor (nome, email, senha, celular, img_corretor) VALUES ('$nome_c', '$email', '$senha', '$celular', '$name')";
          
            /*if ($senha == $conf_senha) {
                $sql = "INSERT INTO corretor (nome, email, senha, celular) VALUES ('$nome', '$email', '$senha', $celular)";
            }
            else {
                echo "A senha e o cofirmar senha não coincidem";
            }*/

            $salvar = mysqli_query($conexao, $sql);
            header("Location:listar_produto.php");
        }
        else 
        {
            echo "Extensão de arquivo não suportada";
        }

        mysqli_close($conexao);
    
    ?>