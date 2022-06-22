<?php
$connect=mysqli_connect("localhost", "root","", "cinefilmes");

if(mysqli_connect_errno()){
    echo "DEU FALHA";
    exit();
}
else{
    echo "CONECTADO";
}
?>