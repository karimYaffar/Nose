
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Resto de tus etiquetas en el head -->
</head>

<link rel="stylesheet" href="app\Pagina\Inicio\Diseño.css">
<link rel="stylesheet" href="app\Pagina\Registro\diseño.css">
<div class="containerr" >
    <div class="title">Registration</div>
    <div class="content">
      <form action="http://localhost/PHP/PROYECTO_U/?C=UserController&M=Add">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full name</span>
            <input type="text" name ="nombre" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Apellido Paterno</span>
            <input type="text" name="apaterno"  placeholder="Enter your ap" required>
          </div>
          <div class="input-box">
            <span class="details">Apellido Materno</span>
            <input type="text" name ="amaterno" placeholder="Enter your ama" required>
          </div>

          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="numero" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text"  placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Colonia</span>
          <input type="text" name="Colonia" id="Colonia" placeholder="Colonia" required minlength="5" maxlength="40" pattern="[a-z A-Z]+">
        </div>
        <div class="input-box">
          <span class="details">Calle</span>
          <input type="text" name="Calle" id="Calle" placeholder="Calle"  required minlength="5" maxlength="40" pattern="[a-z A-Z]+">
        </div>
        <div class="input-box">
          <span class="details">Municipio</span>
          <input type="text" name="Municipio" id="Municipio" placeholder="Municipio" required minlength="5" maxlength="40" pattern="[a-z A-Z]+">
        </div>
        <div class="input-box">
          <span class="details">Localidad</span>
          <input type="text" name="Localidad" id="Localidad" placeholder="Localidad"  required minlength="5" maxlength="40" pattern="[a-z A-Z]+">
        </div>
        <div class="input-box">
          <span class="details">Referencia</span>
          <input type="text" name="Referencia" id="Referencia" placeholder="Referencia" required minlength="0" maxlength="40" pattern="[a-z A-Z]+">
        </div>
        </div>
   
        <div class="button">
          <button type="submit" value="Register"> Registrar  </button>
        </div>
      </form>
    </div>
  </div>
 