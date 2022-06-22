<?php 
include "topo.php";
?>
<section>
<form method="post" action="cadastro2.php">
    <h1>Cadastro de Filmes</h1>
    <input type="text" name="titulo" placeholder="Titulo do filme"><br>
    <input type="text" name="categoria" placeholder="Categoria do filme"><br>
    <input type="text" name="ano" placeholder="Ano do filme"><br>
    <input type="text" name="sinopse" placeholder="Sinopse"><br>
    <button>Cadastrar</button>
</form>
</section>
<?php
include "rodape.php";
?>