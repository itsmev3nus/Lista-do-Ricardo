<?php
    session_start();
    unset($_SESSION['aluno@gmail.com']);
    unset($_SESSION['senha1234']);
    $_SESSION = array();
    session_destroy();
    header('Location: login.php')
?>