<!DOCTYPE html>
<html lang="en">
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Qual seu objetivo?</h1>
    <br>
    <br>
    <a href="login.php">Login</a>
    <a href="cadastro.php">Cadastro</a>
</body>
</html>