<?php
$servername="localhost";
$database="usuario";
$username="root";
$password="";
#Cria a conexão
$conn = mysqli_connect($servername,$username,$password,$database);
#Verifica a conexão
if(!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
?>