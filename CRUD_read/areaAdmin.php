<?php 

   // CONECTANDO COM O BANCO DE DADOS
  $dbname = "projetophp"; // nome do banco de dados
	$dbhost = "localhost"; // local onde está o banco de dados
	$dbuser = "root"; // nome do usuário do bando de dados
  $dbpass = ""; // senha do usuário do bando de dados

	$pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);
	
	// SELECIONANDO DADOS NO BANCO DE DADOS
	
  $sql = $pdo->query("SELECT * FROM newsletter");

  if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
  }

?> 

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">
  <link href="./assets/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/dist/css/style.css" rel="stylesheet">
  <link href="navbar-top-fixed.css" rel="stylesheet">
  <link href="../assets/img/Logo.png" rel="icon">
  <link href="../assets/img/Logo.png" rel="apple-touch-icon">
  <title>Banco De Dados</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Lista de e-mails cadastrados</a>
      <a class="navbar-brand" href="..\index.php"><img src="../logo.png" alt="Logo_icon" id="logo_style"></a>
    </div>
   </nav>

  <main class="container mt-5">
    <div class="bg-light p-5 rounded">
      <h1>E-mails</h1>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($lista as $newsletter): ?>
    <tr>
      <th scope="row"><?php echo $newsletter['id']; ?></th>
      <td><?php echo $newsletter['email'];?></td>
      <td>
        <!-- <a href="#" class="btn btn-warning"> Editar </a>
        <a href="#" class="btn btn-danger"> Apagar </a></td> -->
    </tr>
  <?php endforeach; ?> 
  </tbody>
</table>
</main>
<script src="/CRUD_unipe/assets/bootstrap.bundle.min.js"></script>
</body>

</html>