<?PHP
    $hostname='localhost';
    $username='root';
    $pass='';
    $banco='nexos_lab';
    $db=mysqli_connect($hostname,$username,$pass);
    mysqli_select_db($db,$banco);
?>