<?php
    if (isset($_POST['cod_imovel'])) {
        include("conexao.php");
        $bd = mysqli_select_db($conexao, "bd_imobiliaria");

        $codImovel = $_POST['cod_imovel'];
        $comando = "DELETE FROM imovel WHERE cod_imovel = $codImovel";
        $resultado = mysqli_query($conexao, $comando);

        if ($resultado) {
            //echo "Removido com Sucesso!";
            header("Location:listar_produto.php");
        } else {
            echo "Não foi removido";
        }
}
