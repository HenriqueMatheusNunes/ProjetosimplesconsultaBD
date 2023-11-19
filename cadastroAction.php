<?php


 $servername = "localhost";
 $username = "root";
 $password = "senhasegura123#";
 $dbname = "pwii";
 $conexao = new mysqli($servername, $username, $password, $dbname);
 if ($conexao->connect_error) {
 die("Connection failed: " . $conexao->connect_error);
 }

 $sql = "INSERT INTO amigo (nome, apelido, email)
 VALUES ('".$_POST['txtNome']."', '".$_POST['txtApelido']."', '".$_POST
['txtEmail']."')";
 if ($conexao->query($sql) === TRUE) {
 echo '
 <a href="cadastro.php">
 <h1 class="w3-button w3-teal">Amigo Salvo com sucesso! </h1>
 </a>
 ';
 
 } else {
 echo '
 <a href="cadastro.php">
 <h1 class="w3-button w3-teal">ERRO! </h1>
 </a>
 ';
 }


 ?>