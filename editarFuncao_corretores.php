<?php
    include("seguranca.php");

    $id = $_POST['cod_corretor'];
    $nome_c = $_POST['nome'];
    $email = $_POST['email'];
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
            upload($tmp,$nome,500,$pasta); //upload + conversão da img com 500px;

            $sql = "UPDATE corretor SET nome='$nome_c', email='$email', celular='$celular', img_corretor='$name' WHERE cod_corretor=$id";
            $salvar = mysqli_query($conexao, $sql);

            if (mysqli_affected_rows($conexao)) 
            {
                echo "Editado com Sucesso!";
                header("Location:listar_corretor.php");
            }
            else {
                echo "Não foi editado com Sucesso";
                header("Location:editar_corretores.php?id=$id");
            }
        }
        else 
        {
            echo "Extensão de arquivo não suportada";
        }

        mysqli_close($conexao);
    
    ?>