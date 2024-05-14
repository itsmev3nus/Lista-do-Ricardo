<?php
if(!empty($_POST['login'])){

    include_once('conexao.php');
    $usuario = $_POST['usuario'];
    $pas = $_POST['pas'];
    $mail = $_POST['mail'];
 
    $result = mysqli_query($mysqli, "INSERT INTO arquivador(usuario,senha,email) VALUES ('$usuario','$pas','$mail')");
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
        h1{
            color: #EF1DF2;
        }

        p{
            color: #790C79;
            animation: pisca 5s infinite;
        }

        body{
            background-color: #000000;
            animation: pisca 5s infinite;
        }

        a{
            color: #790C79;
            animation: pisca 5s infinite;
        }

        @keyframes pisca{
            0% {color: #790C79;}
            10%{color: #1F621A;}
            20%{color: #24F21D;}
            30%{color: #586169;}
            40%{color: #790C79;}
            50%{color: #EF1DF2;}
            60% {color: #24F21D;}
            70%{color: #1F621A;}
            80%{color: #EF1DF2;}
            90%{color: #586169;}
            100%{color: #790C79;}
        }
    </style>
<body>
<a href="index.php">voltar</a>
    <h1>Insira seu:</h1>
<form action="cadastro.php" method="POST">
                <p>
                    Email: <br>
                    <input type="email" name="mail">
                </p>
                <p>
                    Senha:<br>
                    <input type="password" name="pas">
                </p>
                <p>
                    Usuário:<br>
                    <input type="text" name="usuario">
                </p>
                
                <p>
                    <input type="submit" name="login" value="login">
                </p>
                
    </form>
</body>
</html>