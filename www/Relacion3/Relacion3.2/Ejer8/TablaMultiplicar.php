<?php

$numero = $_POST["consulta"];
echo "<table border=\"1\">";

for($i=0;$i<=10;$i++)
{
echo" <tr>
    <td style=padding:7px>" . $numero." </td>
    <td style=padding:7px>" . ' x ' ." </td>
    <td style=padding:10px>" .  $i  ." </td>
    <td style=padding:7px>" . ' = ' ." </td>
    <td style=padding:10px>" .  $numero*$i  ." </td>
  </tr>";
}
echo "</table>";
?>


