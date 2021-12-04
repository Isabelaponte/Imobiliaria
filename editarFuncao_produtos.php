<?php
    include("seguranca.php");

    $id = $_POST['cod_imovel'];
    $end = $_POST['end'];
    $num = $_POST['numero'];
    $cep = $_POST['cep'];
    $tipo = $_POST['tipo'];
    $cidade = $_POST['cidade'];
    $img = $_POST['img'];
    $status_alug = $_POST['status_aluguel'];
    $valor_alug = $_POST['valor_aluguel'];
    $status_comp = $_POST['status_compra'];
    $valor_comp = $_POST['valor_compra'];
    
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

            $sql = "UPDATE imovel SET end='$end', num_end=$num, cep=$cep, cidade='$cidade', status_aluguel='$status_alug', status_venda='$status_comp', valor_aluguel='$valor_alug', valor_venda='$valor_comp', tipo='$tipo', img_imovel='$name' WHERE cod_imovel = $id";
            $salvar = mysqli_query($conexao, $sql);

            if (mysqli_affected_rows($conexao)) 
            {
                echo "Cadastrado com Sucesso!";
                header("Location:listar_produto.php");
            }
            else {
                echo "Não foi cadastrado com Sucesso";
                header("Location:editar_produtos.php?id=$id");
            }
        }
        else 
        {
            echo "Extensão de arquivo não suportada";
        }

        mysqli_close($conexao);
    
    ?>