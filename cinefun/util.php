<?php  
// função para validar uma mensagem e retornar um texto apropriado
function validar_msg($msg)
{

	switch ($msg) {
		case 'embranco':
			$retorno = '<h4 class="alert alert-warning d-flex align-items-center justify-content-center msgalert">Informe todos os dados para efetuar o login!</h4>';
			break;

		case 'invalido':
			$retorno = '<h4 class="alert alert-danger d-flex align-items-center justify-content-center msgalert">Atenção: Usuário ou senha inválidos</h4>';
			break;

		case 'cadembranco':
			$retorno = '<h4 class="alert alert-warning d-flex align-items-center justify-content-center msgalert">Preencha todos os dados do filme para cadastrar!</h4>';
			break;

		case 'edtembranco':
			$retorno = '<h4 class="alert alert-warning d-flex align-items-center justify-content-center msgalert">Preencha todos os dados do filme para editar!</h4>';
			break;

		case 'cadastrado':
			$retorno = '<h4 class="alert alert-success d-flex align-items-center justify-content-center msgalert">Filme cadastrado com sucesso!</h4>';
			break;

		case 'errocadastro':
			$retorno = '<h4 class="alert alert-danger d-flex align-items-center justify-content-center msgalert">Atenção: erro ao efetuar o cadastro. Tente novamente mais tarde...</h4>';
			break;

		case 'idinvalido':
			$retorno = '<h4 class="alert alert-warning d-flex align-items-center justify-content-center msgalert">Atenção: filme inválido. por favor, repita a operação</h4>';
			break;

		case 'filmedeletado':
			$retorno = '<h4 class="alert alert-success d-flex align-items-center justify-content-center msgalert">Filme excluído com sucesso!</h4>';
			break;

		case 'errodeletar':
			$retorno = '<h4 class="alert alert-danger d-flex align-items-center justify-content-center msgalert">Atenção: erro ao excluir filme. Tente novamente mais tarde...</h4>';
			break;

		case 'editado':
			$retorno = '<h4 class="alert alert-success d-flex align-items-center justify-content-center msgalert">Dados do filme alterados com sucesso!</h4>';
			break;

		case 'erroeditar':
			$retorno = '<h4 class="alert alert-danger d-flex align-items-center justify-content-center msgalert">Atenção: erro ao alterar dados do filme. Tente novamente mais tarde...</h4>';
			break;

		default:
			$retorno = '';
			break;
	}

	return $retorno;

}
?>