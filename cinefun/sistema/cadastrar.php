<?php  include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['genero']) || empty($_POST['classificacao']) ||empty($_POST['ano_de_lancamento']))
{
    header('location:index.php?msg=cadembranco');
}
else
{
    $titulo             = $_POST['titulo'];
    $genero             = $_POST['genero'];
    $classificacao      = $_POST['classificacao'];
    $ano_de_lancamento  = $_POST['ano_de_lancamento'];

    include_once '../database/filme.dao.php';

    $result = salvar_filme($titulo, $genero, $classificacao, $ano_de_lancamento);

    if ($result)
    {
        header('location:cadastrando.php?msg=cadastrado');
    }
    else
    {
        header('location:cadastrando.php?msg=errocadastro');
    }
}

?>