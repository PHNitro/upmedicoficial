<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="lib/bootstrap-5.1.3/css/bootstrap.min.css">
  <script src="lib/bootstrap-5.1.3/js/bootstrap.min.js"></script>
  <style>
    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="crm"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

  </style>
</head>

<body class="text-center">
  <form action="/controller/loginController.php" method="post">
    <input type="text" name="crm" id="" placeholder="Identificação: ">
    <input type="password" name="senha" id="">
    <input type="submit" value="Entrar">
  </form>
  <div>
    <?php
    if(isset($_GET['msg'])){
      echo $_GET['msg'];
    }
    ?>
  </div>
</body>
</html>
