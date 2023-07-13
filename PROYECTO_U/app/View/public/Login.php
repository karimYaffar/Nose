<link rel="stylesheet" href="app\Pagina\Login\Diseño_Lo.css">
<link rel="stylesheet" href="app\Pagina\Inicio\Diseño.css">
  <div class="login-box">
    <form action="./conex.php" target="_blank" method="post" name="login" id="login">
      <h2>Iniciar sesión</h2>

      <div class="user-box">
        <input type="text" name="user" id="user" placeholder="Usuario" required minlength="5" maxlength="30" pattern="[a-z A-Z]+">
        <label for="user">Usuario</label>
      </div>
      <div class="user-box">
        <input type="password" name="pass" id="pass" placeholder="Contraseña" required minlength="8" maxlength="30" pattern="([a-z A-Z0-9\d@$!%*?&]+)">
        <label for="pass">Contraseña</label>
      </div>

      <button type="submit">Iniciar sesión</button>
    </form>
  </div>

