<?php
include "topo.php";
?>
<section>
    <?php
    include "connect.php";
    $a=$_POST['codigo'];
    $sql=mysqli_query($connect,
   "SELECT * FORM filmes WHERE id= '$a'" );
    ?>
</section>

<?php
include "rodape.php";
?>