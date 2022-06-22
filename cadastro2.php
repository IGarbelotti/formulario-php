<?php
include "topo.php";
?>

<section>
    <?php
    $a=$_POST['titulo'];
    $b=$_POST['categoria'];
    $c=$_POST['ano'];
    $d=$_POST['sinopse'];
    include "connect.php";
    $cadastrar=mysqli_query($connect,
    "INSERT INTO filmes VALUES ('', '$a', '$b', '$c', '$d')");
    if($cadastrar==true){
        echo "Filme cadastro com sucesso";
    }
    else{
        echo "Não cadastrou";
    }
    ?>
</section>