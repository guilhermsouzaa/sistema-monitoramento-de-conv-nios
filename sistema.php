<?php
session_start();
include_once('config.php');
// print_r($_SESSION);
if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
$logado = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            color: white;
            background-image: linear-gradient(to right, dodgerblue, purple)
        }
        .nav-link{
            color: white;
        }
        img{
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        position: absolute;
        }
        div{
            margin-right: auto;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
    <title>SISCONV</title>
</head>
<body>
<nav class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">SISCONV</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="form-cadastro.php">Cadastrar Convênio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="listar.php">Listar Convênios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="financeiro.php">Acompanhamento Financeiro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="historico.php">Histórico de Convênios</a>
  </li>
    </nav>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger">Sair</a>
    </div>
    <img src="AAPII__2.png">
    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
</body>
</html>