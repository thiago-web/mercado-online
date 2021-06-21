<?php
  $id = 1;
  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("bd-mercado-online");
  $sql = "SELECT imagem_produto FROM produtos WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['imagem_produto'];
?>