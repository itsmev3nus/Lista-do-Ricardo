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
   <p>
   <form action="teste.php" method="POST">
                <p>
                    Email: <br>
                    <input type="email" name="mail">
                <p>
                    Senha:<br>
                    <input type="password" name="pas">
                </p>
                <p>
                    <input type="submit" name="insert" value="login">
                </p>
                
    </form>

</body>