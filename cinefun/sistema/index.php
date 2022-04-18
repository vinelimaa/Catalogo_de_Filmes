<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
	<title>Cinefun - Area Restrita</title>
</head>
<body class="bg">
	<div class="container-fluid">

		<!-- Cabeçalho -->
		<div class="row row1">
			<div class="col-3 popcorn"><img src="../img/popcorn.png"></div>
			<div class="col-lg-2 col-md-4 col-sm-8 cinefun"><a href="index.php">CINEFUN</a></div>
			<div class="col-lg-5 col-md-2 empty">
				<form class="d-flex">
			        <input class="form-control me-2 search" type="search" placeholder="Buscar..." aria-label="Search">
			        <button class="btn btn-outline-warning go" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
  					</button>
      			</form>
      		</div>
			<div class="col-lg-2 col-md-3 col-sm-4 sair"><a href="logout.php" class="btn btn-outline-light">Sair do sistema</a></div>
		</div>

		<!-- Linha de divisão entre cabeçalho e menu -->
		<div class="row row2">
			<div class="col-12 linehead"></div>
		</div>

		<!-- Menu -->
		<div class="row row3">
			<div class="col-2 before_menubar"></div>
			<div class="col-1 menubar">
				<ul class="menu-dropdown">
			    	<li class="md-item">
			            <a href="">CATÁLOGO</a>
			            <ul class="submenu-dropdown">
			                <li class="sd-item">                        
			                    <a href="cadastrando.php">Cadastrar Filme</a> 
			                    <a href="editando.php">Editar Catálogo</a>  
			                </li>
			            </ul>
			         </li>
				</ul>
			</div>
			<div class="col-lg-9 col-md-11 after_menubar"></div>
		</div>
	</div>
</body>
</html>