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

$sql = "SELECT * FROM cadastrar_convenio ORDER BY n_convenio DESC";

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
    <h1>Convênios Cadastrados</h1>
    <br>

        <div>
            <table>
                 <thead>
                    <tr>
                        <th scope="col">N° Convênio</th>
                        <th scope="col">Executora</th>
                        <th scope="col">Emenda Parlamentar</th>
                        <th scope="col">Objeto</th>
                        <th scope="col">Situação</th>
                        <th scope="col">Concedente</th>
                        <th scope="col">Liminar Judicial</th>
                        <th scope="col">Inicio de Vigência</th>
                        <th scope="col">Fim de Vigência</th>
                        <th scope="col">Prestação de Contas</th>
                        <th scope="col">Valor do Repasse</th>
                        <th scope="col">Valor Liberado</th>
                        <th scope="col">Valor a Liberar</th>
                    </tr>
                </thead>

<tbody>

    <?php
    while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$user_data['n_convenio']."</td>";
        echo "<td>".$user_data['executora']."</td>";
        echo "<td>".$user_data['emenda_parlamentar']."</td>";
        echo "<td>".$user_data['objeto']."</td>";
        echo "<td>".$user_data['situacao']."</td>";
        echo "<td>".$user_data['concedente']."</td>";
        echo "<td>".$user_data['liminar_judicial']."</td>";
        echo "<td>".$user_data['inicio_vig']."</td>";
        echo "<td>".$user_data['fim_vig']."</td>";
        echo "<td>".$user_data['prest_contas']."</td>";
        echo "<td>".$user_data['valor_repasse']."</td>";
        echo "<td>".$user_data['valor_liberado']."</td>";
        echo "<td>".$user_data['valor_liberar']."</td>";
        echo "<td>
        <a class = 'btn btn-sm btn-primary' href = 'edit.php?id=$user_data[n_convenio]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
        </svg>
        </a>
        </td>";
        echo "<tr>";
    }
    ?>
    
  </tbody>
</table>
    </div>
</body>
</html>