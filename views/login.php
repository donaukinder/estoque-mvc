<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo BASE_URL; ?>assets/css/signin.css" rel="stylesheet">

<title>Login - Estoque</title>
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST">
    	<div class="alert alert-danger">
  		<?php if(!empty($msg)): ?>
  		  <?php echo $msg;?>
  		<?php endif; ?>  
		  </div>
      <h1 class="h3 mb-3 font-weight-normal">Sistema de Estoque</h1>
      <label for="inputText" class="sr-only">Seu ID:</label>
      <input type="text" class="form-control" name="number" placeholder="Seu ID" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Senha" required>
     <div class="checkbox mb-3">
        </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form> 
  </body>
</html>
