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

$sql = "SELECT * FROM cadastrar_convenio";

$result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SISCONV</title>
        <style>
        body{
            color: white;
            background-image: linear-gradient(to right, dodgerblue, purple)
        }
        h1{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }
        a{
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        table, td, th, tr {
            border: 0.3px solid gray;
            background-color: rgba(0, 0, 0, 0.2);
            text-align: center;
            border-radius: 10px;
        }
        </style>


</head>
<body>
    <br>
<div class="d-flex">
        <a href="sistema.php" class="btn btn-danger">Voltar</a>
    </div>
    <h1>Acompanhamento Financeiro</h1>
    <br>

        <div>
            <table>
                 <thead>
                    <tr>
                        <th scope="col">N° Convênio</th>
                        <th scope="col">Executora</th>

                        <th scope="col">Objeto</th>
                        <th scope="col">Situação</th>
                        <th scope="col">Concedente</th>

                        <th scope="col">Valor do Repasse</th>
                        <th scope="col">Valor Liberado</th>
                        <th scope="col">Valor a Liberar</th>
                        <th scope="col">Valor Original</th>
                        <th scope="col">Valor Aditivado</th>
                        <th scope="col">Valor da Contrapartida</th>
                        <th scope="col">Valor Total Pactuado</th>
                    </tr>
                </thead>

<tbody>

    <?php
    while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$user_data['n_convenio']."</td>";
        echo "<td>".$user_data['executora']."</td>";

        echo "<td>".$user_data['objeto']."</td>";
        echo "<td>".$user_data['situacao']."</td>";
        echo "<td>".$user_data['concedente']."</td>";

        echo "<td>".$user_data['valor_repasse']."</td>";
        echo "<td>".$user_data['valor_liberado']."</td>";
        echo "<td>".$user_data['valor_liberar']."</td>";
        echo "<td>".$user_data['valor_original']."</td>";
        echo "<td>".$user_data['valor_aditivado']."</td>";
        echo "<td>".$user_data['valor_contrapartida']."</td>";
        echo "<td>".$user_data['valor_tot_pactuado']."</td>";
        echo "<td>ações</td>";
        echo "<tr>";
    }?>
    
  </tbody>
</table>
    </div>
</body>
</html>