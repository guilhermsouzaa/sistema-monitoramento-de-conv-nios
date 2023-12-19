<?php
if(isset($_POST['submit']))
{
    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Usuário: ' . $_POST['usuario']);
    print_r('<br>');
    print_r('Senha: ' . $_POST['senha']);
    print_r('<br>');
    print_r('E-mail: ' . $_POST['email']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    
    $result = mysqli_query($conexao, "INSERT INTO cadastrar_usuario(nome,usuario,senha,email) 
    VALUES ('$nome','$usuario','$senha','$email')");

    header('Location: index.php');
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
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
    <a href="home.php">Voltar</a>
    <div class="box">
    <form action="cadastro-usuarios.php" method="POST">
        <fieldset>
            <legend><b>Cadastrar Usuário</b></legend>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="label">Nome</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="usuario" id="usuario" class="inputUser" required>
                <label for="usuario" class="label">Usuário</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="codigo conv" class="label">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="label">E-mail</label>
            </div>
            <br><br>
       
            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>
</div>
</body>
</html>