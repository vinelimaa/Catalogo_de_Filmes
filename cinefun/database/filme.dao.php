<?php  
include_once 'conn.php';

// função para salvar filmes
function salvar_filme($titulo, $genero, $classificacao, $ano_de_lancamento)
{
	$conn = conectar();

	$sql = "INSERT INTO filmes_tb (titulo, genero, classificacao, ano_de_lancamento) 
	VALUES ('$titulo', '$genero', '$classificacao', '$ano_de_lancamento')";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}
	return false;
}

// função para buscar todos os filmes
function buscar_filmes()
{
	$conn = conectar();

	$sql = "SELECT * FROM filmes_tb";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

// função para exibir filmes
function exibir_filmes()
{
	$result = buscar_filmes();

	// se o valor de result for nulo, retornamos uma mensagem de erro
	if ($result == null)
	{
		$retorno = '<h3>Não há filmes cadastrados</h3>';
	}
	else // senão (há, ao menos, um filme para exibir)
	{
		$retorno = '<div class="exibir">';
		$retorno .= '<table class="table table-hover table-responsive">';
		// montar a primeira linha da tablea
		$retorno .= '<tr class="headtb">';
		$retorno .= '<th><b>ID #</b></th>'; // coluna de cabeçalho = th = table header
		$retorno .= '<th><b>Título</b></th>';
		$retorno .= '<th><b>Gênero</b></th>';
		$retorno .= '<th><b>Classificação</b></th>';
		$retorno .= '<th><b>Ano de Lançamento</b></th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';

		while ($filme = mysqli_fetch_assoc($result))
		{
			// dentro deste laço, montaremos novas linhas para a tabela:
			$retorno .= '<tr class="tb">';
			// coluna simples da tabela = td = table data
			$retorno .= "<td>" . $filme['id_filme'] . "</td>";
			$retorno .= "<td>" . $filme['titulo']   . "</td>";
			$retorno .= "<td>" . $filme['genero']    . "</td>";
			$retorno .= "<td>" . $filme['classificacao']  . "</td>";
			$retorno .= "<td>" . $filme['ano_de_lancamento']    . "</td>";
			$retorno .= "<td>" . link_deletar($filme['id_filme']) . "</td>";
			$retorno .= "<td>" . link_editar($filme['id_filme'])  . "</td>";
			$retorno .= '</tr>'; // fim da linha da tabela
		}

		$retorno .= '</table>';
		$retorno .= '</div>';
	}

	return $retorno;
}

// função para montar o link de exclusão
function link_deletar($id_filme)
{
	$link = '<a href="deletar.php?id_filme='.$id_filme.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este filme?\')" class="btn btn-danger">Deletar</a>';

	return $link;
}

// função para montar o linl para editar
function link_editar($id_filme)
{
	$link = '<a href="editar.php?id_filme='.$id_filme.'" class="btn btn-warning">Editar</a>';
	return $link;
}

// função para deletar filme
function deletar_filme($id_filme)
{
	$conn = conectar();

	$sql = "DELETE FROM filmes_tb WHERE id_filme = $id_filme";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

// função para buscar um filme específico
function buscar_filme($id_filme)
{
	$conn = conectar();

	$sql = "SELECT * FROM filmes_tb WHERE id_filme = $id_filme";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

// função para editar (atualizar) dados do filme
function editar_filme($id_filme, $titulo, $genero, $classificacao, $ano_de_lancamento)
{
	$conn = conectar();

	$sql = "UPDATE filmes_tb SET titulo = '$titulo', genero = '$genero', classificacao = '$classificacao',
	ano_de_lancamento = '$ano_de_lancamento'  
	WHERE id_filme = $id_filme";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

?>