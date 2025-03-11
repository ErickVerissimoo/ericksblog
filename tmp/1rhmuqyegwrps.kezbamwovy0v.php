<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro / Login</title>
  <style>
    form { 
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <form id="cadastro" method="post" action="/cadastro">
    <input placeholder="Email" id="email" name="email" type="email" required>
    <input placeholder="Senha" id="password" name="password" type="password" required>
    <button type="submit">Cadastrar</button>
  </form>
  
  <form id="login" method="post" action="/login" style="display: none;">
    <input placeholder="Email" id="login_email" name="email" type="email" required>
    <input placeholder="Senha" id="login_password" name="password" type="password" required>
    <button type="submit">Login</button>
  </form>

  <a href="#" id="toggleForm">Já tem uma conta? Faça login</a>

  <script>
    document.getElementById('toggleForm').addEventListener('click', function(event) {
      event.preventDefault();
      var cadastroForm = document.getElementById('cadastro');
      var loginForm = document.getElementById('login');
      if (cadastroForm.style.display !== 'none') {
        cadastroForm.style.display = 'none';
        loginForm.style.display = 'block';
        this.innerText = 'Não tem uma conta? Cadastre-se';
      } else {
        cadastroForm.style.display = 'block';
        loginForm.style.display = 'none';
        this.innerText = 'Já tem uma conta? Faça login';
      }
    });
  </script>
</body>
</html>
