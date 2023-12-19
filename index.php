<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISCONV</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(to right, dodgerblue, purple)
        }
        div{
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: whitesmoke;
        }
        input{
            padding: 15px;
            outline: none;
            border: none;
            font-size: 15px;
        }
        .button{
            background-color: dodgerblue;
            border-radius: 10px;
            border: none;
            padding: 15px;
            width: 100%;
            cursor: pointer;
            color: aliceblue;
        }
        .button:hover{
            background-color: #7FB9C1;
        }
        a{
            color: white;
            justify-content: flex-start;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>

    <div>
        <form action="login.php" method="POST">
        <h1>Login</h1>
        <input type = "text" name = "usuario" placeholder="Usuário">
        <br><br>
        <input type = "password" name = "senha" placeholder="Senha">
        <br><br>
        <input class = "button" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>