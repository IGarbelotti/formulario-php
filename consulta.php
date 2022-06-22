<?php

include "topo.php";

?>

<section>

<table>

<tr>

<td>ID</td>

 <td>Titulo</td> 

<td>Categoria</td>

<td>Ano</td> 

<td>Sinopse</td> 

</tr>

<?php

include "connect.php";

$consulta=(mysqli_query($connect,"SELECT * FROM filmes"));

while($dados=mysqli_fetch_array($consulta)){

echo "<tr>";

 echo"<td>" .utf8_encode($dados["id"]) . "</td>";

echo"<td>" .utf8_encode($dados["titulo"]) . "</td>";

echo"<td>" .utf8_encode($dados["categoria"]) . "</td>";

echo"<td>" .utf8_encode($dados["ano"]) . "</td>";

 echo"<td>" .utf8_encode($dados["sinopse"]) . "</td>";

echo "</tr>";

 }

?>

</table>


</section>

<?php

include "rodape.php";
