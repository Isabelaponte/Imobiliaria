<?php
    if (isset($_POST['cod_corretor'])) {
        include("conexao.php");
        $bd = mysqli_select_db($conexao, "bd_imobiliaria");

        $codCorretor = $_POST['cod_corretor'];
        $comando = "DELETE FROM corretor WHERE cod_corretor = $codCorretor";
        $resultado = mysqli_query($conexao, $comando);

        if ($resultado) {
            //echo "Removido com Sucesso!";
            header("Location:listar_corretor.php");
        } else {
            echo "Não foi removido";
        }
}
