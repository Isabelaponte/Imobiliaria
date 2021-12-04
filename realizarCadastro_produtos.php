<?php
    include("seguranca.php");

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
    $form_contrato = $_POST['forma_contrato'];
    $area = $_POST['area'];
    $comodos = $_POST['comodos'];
    $dormitorios = $_POST['dormitorios'];
    $id_cor = $_POST['id_cor'];

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

            $sql = "INSERT INTO imovel (end, num_end, cep, cidade, status_aluguel, status_venda, valor_aluguel, valor_venda, tipo, img_imovel, forma_contrato, area, qnt_comodos, dormitorios, id_corretor) VALUES ('$end', $num, '$cep', '$cidade', '$status_alug', '$status_comp', '$valor_alug', '$valor_comp', '$tipo', '$name', '$form_contrato', '$area', '$comodos', '$dormitorios', '$id_cor')";

            $salvar = mysqli_query($conexao, $sql);
            header("Location:listar_produto.php");
        }
        else 
        {
            echo "Extensão de arquivo não suportada";
        }

        mysqli_close($conexao);
    
    ?>