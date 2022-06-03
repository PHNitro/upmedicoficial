<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPMedic | Acesso</title>
    <link rel="stylesheet" href="/css/login.css">

</head>
<body class="white-bg">
    <div class="TelaLogin">
        <center>
        <img src="/image/uplogo.png" alt="" class="up"
                                                     style="width: 300px">
        <form action="/view/inicio/home.php" method="post">
        </center>
        <p>Bem-Vindo!</p>
        <p>Informe os dados de envio</p>
        <form class="m-t" role="form" method="post" action="validaacesso.php">
            <div class="form-group">
                <input id="crmemail" name = "crmemail" type="text" class="form-control" placeholder="sua CRM ou @email" required="">
            </div>
            <div class="form-group">
                <input id="" type="password" placeholder="Senha">
            <br />
            <button id="enviar" type="submit" class="btn btn-info block full-width m-b" value="Entrar">Entrar</button>
            </div>
            <div>
            <a href="/view/inicio/esqueceuasenha.php"><small>Esqueceu a senha?</small></a> <br>
            <a href="/view/formularios/formCadastrarMedico.php"><small>Ainda não tem cadastro? Clique aqui e cadastre-se!</small></a> <br>
        </form>
        </div>
    </div>
    </div>
    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>