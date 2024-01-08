<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>

  <div class="wrapper">
    <section class="form login">
      <header>Chat entre funcionários</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="daniel@gmail.com" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="senha@123" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Vá para o Chat">
        </div>
      </form>
      <div class="link">Ainda não tem uma conta? <a href="index.php">Registre-se</a></div>
      <div class="link"><a href="../index.php">Voltar para dashboard </a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
