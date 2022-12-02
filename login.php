<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="assets/css/Login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Favicons -->
<link href="./assets/img/Logo.png" rel="icon">
<link href="./assets/img/Logo.png" rel="apple-touch-icon">
<title>Login Area</title>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <a href="index.php"><img src="./logo.png" id="icon" alt="User Icon"/></a>
    </div>

    <!-- Login Form -->
    <form action="validaLogin.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="usuário">
      <input type="text" id="password" class="fadeIn third" name="senha" placeholder="senha">
      <input type="submit" class="fadeIn fourth" value="Entrar" onclick="funcao1()">
    </form>

  </div>
</div>