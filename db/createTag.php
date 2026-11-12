<?php
    require "./conexao.php";

    $name=$_POST['name'];
    $sql="insert into tag (name) values ('$name')";
    mysqli_query($db,$sql)or die('Não foi possível inserir');
    header("Location: ../");
    exit
?>