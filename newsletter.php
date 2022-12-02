<?php 
   // CONECTANDO COM O BANCO DE DADOS
    $dbname = "projetophp"; 
	$dbhost = "localhost"; 
	$dbuser = "root"; 
    $dbpass = ""; 
	$pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);

    // VARIÁVEL QUE REPRESENTA UM CAMPO DA TABELA:
    $email = $_REQUEST['email'];

    // INSERINDO DADOS NO BANCO DE DADOS
	$pdo->query("INSERT INTO `newsletter` (email) VALUES ('$email')");

    // REDIRENCIONANDO PARA URL ....
    header("Location: index.php")
?>    