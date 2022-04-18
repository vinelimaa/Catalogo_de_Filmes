<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <title>Cinefun - Home</title>
</head>
<body class="container-fluid body1">

<div class="blue">
    <img src="img/back.jpg">
         <div class="circulo">
            <img src="img/cam.png">
            <p><b>CINEFUN</b></p>
        </div>
</div>

    <h1 class="login"><b>Login</b></h1>

    <div class="mlogin">
        <?php  

        if (isset($_GET['msg']))
        {
            include_once 'util.php';
            echo validar_msg($_GET['msg']);
        }
        ?>
    </div>
    <div class="wellcome">
        <p>Bem-vindo ao <b>CINEFUN.</b></p>
    </div>
    
   
<div class="form1">
    <form action="validar.php" method="post">

        <p>
            <label>Usuário:</label><br>
            <input type="text" name="usuario" placeholder="admin" required>
        </p>

        <p>
            <label>Senha:</label><br>
            <input type="password" name="senha" placeholder="1234" required>
        </p>

        <p>
            <button type="submit" name="entrar" class="btn btn-danger">Entrar</button>
        </p>

    </form>
</div>

</body>
</html>