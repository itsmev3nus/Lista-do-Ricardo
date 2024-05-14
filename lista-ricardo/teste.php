<?php
session_start();
//print_r($_REQUEST);


if(!empty($_POST['insert']) && !empty($_POST['pas']) && !empty($_POST['mail'])){


 include_once('conexao.php');
 $pas = $_POST['pas'];
 $email = $_POST['mail'];
 
 

 $sql = "SELECT * FROM  arquivador WHERE email = '$email' and senha = '$pas'";
 $result = $mysqli->query($sql);



 if(mysqli_num_rows($result) < 1){

    unset($_SESSION['mail']);
    unset($_SESSION['pas']);
    header('Location: login.php');
 }
 else if (mysqli_num_rows($result) == 1){

    $_SESSION['mail'] = $email;
    $_SESSION['pas'] = $pas;
    header('Location: site.php');
 }
 
}

?>