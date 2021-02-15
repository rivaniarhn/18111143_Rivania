<?php
session_start();
require_once 'koneksi.php';

if(!isset($_SESSION['usernmame']) == 0 ){
    header('Location: ../login.php');
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;

    try{
        $sql = "SELECT *FROM `tabel_register` WHERE username = ? AND password = SHA1(?)";
        $q = $database_connection->prepare($sql);
        $q->execute([$username, $password]);

        $count = $q->rowCount();
        if($count == 1){
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
            return;
        }else{
            echo "Maaf, Anda tidak bisa login";
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>