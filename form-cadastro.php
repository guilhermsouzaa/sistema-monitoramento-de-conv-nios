<?php
if(isset($_POST['submit']))
{
  //  print_r('Convenio: ' . $_POST['n_convenio']);
  //  print_r('<br>');
  //  print_r('Executora: ' . $_POST['executora']);
  // print_r('<br>');
  //  print_r('Emenda: ' . $_POST['emenda_parlamentar']);
  // print_r('<br>');
  // print_r('Objeto: ' . $_POST['objeto']);
  // print_r('<br>');
  // print_r('Situação: ' . $_POST['situacao']);
  // print_r('<br>');
  // print_r('Concedente: ' . $_POST['concedente']);
  // print_r('<br>');
  // print_r('Liminar Judicial: ' . $_POST['liminar_judicial']);
  // print_r('<br>');
  // print_r('Início de Vigência: ' . $_POST['inicio_vig']);
  // print_r('<br>');
  // print_r('Fim de Vigência: ' . $_POST['fim_vig']);
  // print_r('<br>');
  // print_r('Prestação de Contas: ' . $_POST['prest_contas']);
  // print_r('<br>');
  // print_r('Valor do Repasse: ' . $_POST['valor_repasse']);
  // print_r('<br>');
  // print_r('Valor Liberado: ' . $_POST['valor_liberado']);
  // print_r('<br>');
  // print_r('Valor a Liberar: ' . $_POST['valor_liberar']);
  // print_r('<br>');
  // print_r('Valor Original: ' . $_POST['valor_original']);
  // print_r('<br>');
  // print_r('Valor Aditivado: ' . $_POST['valor_aditivado']);
  // print_r('<br>');
  // print_r('Valor de Contrapartida: ' . $_POST['valor_contrapartida']);
  // print_r('<br>');
  // print_r('Valor Total Pactuado: ' . $_POST['valor_tot_pactuado']);
  // print_r('<br>');
  // print_r('Atualização: ' . $_POST['atualizacao']);

    include_once('config.php');

$n_convenio = $_POST['n_convenio'];
$executora = $_POST['executora'];
$emenda_parlamentar = $_POST['emenda_parlamentar'];
$objeto = $_POST['objeto'];
$situacao = $_POST['situacao'];
$concedente = $_POST['concedente'];
$liminar_judicial = $_POST['liminar_judicial'];
$inicio_vig = $_POST['inicio_vig'];
$fim_vig = $_POST['fim_vig'];
$prest_contas = $_POST['prest_contas'];
$valor_repasse = $_POST['valor_repasse'];
$valor_liberado = $_POST['valor_liberado'];
$valor_liberar = $_POST['valor_liberar'];
$valor_original = $_POST['valor_original'];
$valor_aditivado = $_POST['valor_aditivado'];
$valor_contrapartida = $_POST['valor_contrapartida'];
$valor_tot_pactuado = $_POST['valor_tot_pactuado'];
$atualizacao = $_POST['atualizacao'];

$result = mysqli_query($conexao, "INSERT INTO cadastrar_convenio(n_convenio,executora,emenda_parlamentar,objeto,situacao,concedente,liminar_judicial,inicio_vig,fim_vig,prest_contas,valor_repasse,valor_liberado,valor_liberar,valor_original,valor_aditivado,valor_contrapartida,valor_tot_pactuado,atualizacao) 
VALUES ('$n_convenio','$executora','$emenda_parlamentar','$objeto','$situacao','$concedente','$liminar_judicial','$inicio_vig','$fim_vig','$prest_contas','$valor_repasse','$valor_liberado','$valor_liberar','$valor_original','$valor_aditivado','$valor_contrapartida','$valor_tot_pactuado','$atualizacao')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Convênios</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(to right, dodgerblue, purple);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            padding: 15px;
            border: 3px solid (dodgerblue);
            color: white;
        }
        fieldset{
            border: 1px solid dodgerblue;
        }
        legend{
            border: 1px solid (whitesmoke);
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 5px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
        }
        .label{
            position: absolute;
            top: 0%;
            left: 0%;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .label,
        .inputUser:valid ~.label{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #datas{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            text-align:justify;
            align-items: flex-end;
        }
        #submit{
            background-color: dodgerblue;
            border-radius: 10px;
            border: none;
            padding: 15px;
            width: 100%;
            cursor: pointer;
            color: aliceblue;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
        }
        #submit:hover{
            background-color: #7FB9C1;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>
    <br>
<div class="d-flex">
        <a href="sistema.php" class="btn btn-danger">Voltar</a>
    </div>
    <div class="box">
        <form action="form-cadastro.php" method="POST">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <fieldset>
              <legend><b>Cadastrar Convênio</b></legend>
              <br>
        <div class="inputBox">
            <input type="text" name="n_convenio" id="n_convenio" class="inputUser" required>
            <label for="n_convenio" class="label">N° Transferência Voluntária</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="executora" id="executora" class="inputUser" required>
            <label for="executora" class="label">Executora</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="emenda_parlamentar" id="emenda_parlamentar" class="inputUser" required>
            <label for="emenda_parlamentar" class="label">Emenda Parlamentar</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="objeto" id="objeto" class="inputUser" required>
            <label for="objeto" class="label">Objeto do Instrumento</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="situacao" id="situacao" class="inputUser" required>
            <label for="situacao" class="label">Situação</label>
        </div>
        <br><br>
            <div class="inputBox">
                <input type="text" name="concedente" id="concedente" class="inputUser" required>
                <label for="concedente" class="label">Concedente</label>
            </div>
            <br>
            <p>Liminar Judicial:</p>
            <input type="radio" name="liminar_judicial" id="liminar_judicial" value="sim">
            <label for="liminar_judicial">Sim</label>
            <br>
            <input type="radio" name="liminar_judicial" id="liminar_judicial" value="nao">
            <label for="liminar_judicial">Não</label>

            <br><br>
                <label for="datas">Início de Vigência:  </label>
                <input type="date" name="inicio_vig" id="datas" required> 
                <label for="datas">Fim de Vigência:  </label>
                <input type="date" name="fim_vig" id="datas" required>
                <label for="datas">Prestação de Contas:  </label>
                <input type="date" name="prest_contas" id="datas" required>
            <br><br><br>
            <legend><b>Acompanhamento Financeiro</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="valor_repasse" id="valor_repasse" class="inputUser" required>
                <label for="valor_repasse" class="label">Valor do Repasse</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="valor_liberado" id="valor_liberado" class="inputUser" required>
                <label for="valor_liberado" class="label">Valor Liberado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="valor_liberar" id="valor_liberar" class="inputUser" required>
                <label for="valor_liberar" class="label">Valor a Liberar</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="valor_original" id="valor_original" class="inputUser" required>
                <label for="valor_original" class="label">Valor Original</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="valor_aditivado" id="valor_aditivado" class="inputUser" required>
                <label for="valor_aditivado" class="label">Valor Aditivado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="valor_contrapartida" id="valor_contrapartida" class="inputUser" required>
                <label for="valor_contrapartida" class="label">Valor da Contrapartida</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="valor_tot_pactuado" id="valor_tot_pactuado" class="inputUser" required>
                <label for="valor_tot_pactuado" class="label">Valor Total Pactuado</label>
            </div>
            <br><br><br>
            <legend><b>Atualização</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="atualizacao" id="atualizacao" class="inputUser" required>
                <label for="atualizacao" class="label">Insira aqui o texto:</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>