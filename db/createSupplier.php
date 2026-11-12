<?php
    require "./conexao.php";

    $name=$_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $sql="insert into supplier (name, telephone, email) values ('$name', '$telephone', '$email')";
    mysqli_query($db,$sql)or die('Não foi possível inserir');
    header("Location: ../");
    exit
?>