<?php
include "topo.php";
?>
<section>
    <?php
    $a=$_POST['codigo'];
    include "connect.php";
    $deletar=mysqli_query($connect,
    "DELETE FROM filmes WHERE id= '$a'");
    if($deletar==true){
        echo "Filme removido";
}
else {
    echo "Não fi possivel remover o filme";
}
?>
</section>
<?php
include "rodape.php";
?>