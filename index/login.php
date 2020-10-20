<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <link rel="stylesheet" href="../css/stilo.css">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  <title>Pantalla Login</title>
</head>

<body>
  <div class="fondo">
    <div class="contenedor_principal">
      <h3>Iniciar Sesión</h3>

      <form>

        <div class="group">
          <label for="Correo">Correo Electronico</label>
          <input type="email" class="controles" id="Correo">
        </div>

        <div class="group">
          <label for="Contraseña">Contraseña</label>
          <input type="password" class="controles" id="Contraseña">
        </div>

        <div class="group">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">¿Recordar contrseña?</label>
        </div>

        <button type="submit" class="boton">INGRESAR</button>
        
        <div class="contraseñaolvidada">
          <a href="#">¿Contraseña Olvidada?</a>
        </div>
      </form>

    </div>
  </div>
</body>

</html>