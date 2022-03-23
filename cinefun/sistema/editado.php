<?php include_once 'lock.php';
// se o form de edição nao foi enviado ou se algum campo estiver em branco

if(isset($_POST['cancelar']))
{
     header('location:editando.php');
}
else if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['genero']) || empty($_POST['classificacao']) || empty($_POST['ano_de_lancamento']))
{
    header('location:editando.php?msg=edtembranco');
}
else
{
    $id_filme           = $_POST['id_filme'];
    $titulo             = $_POST['titulo'];
    $genero             = $_POST['genero'];
    $classificacao      = $_POST['classificacao'];
    $ano_de_lançamento  = $_POST['ano_de_lancamento'];

    include_once '../database/filme.dao.php';

    $result = editar_filme($id_filme, $titulo, $genero, $classificacao, $ano_de_lançamento);

    if ($result)
    {
        header('location:editando.php?msg=editado');
    }
    else
    {
        header('location:editando.php?msg=erroeditar');
    }
}
?>