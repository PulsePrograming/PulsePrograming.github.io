<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTACTO PULSE PROGRAMMING</title>
  <link rel="stylesheet" href="../css/equipo.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
</head>

<body>
  <header class="encabezado">
    <h1>PULSE PROGRAMMING</h1>
    <a href="../../index.php" class="volver-btn">Volver</a>
  </header>
  <header class="sub-encabezado">
    <h2>Comunicate con nosotros</h2>
  </header>

  <section class="contacto">
    <?php if (isset($success_message)): ?>
      <p class="success"><?php echo $success_message; ?></p>
    <?php endif; ?>
    <?php if (isset($error_message)): ?>
      <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form id="contactanos.php" action="../php/contactanos.php" method="POST">

      <div id="persona-fields">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>

        <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <label for="consulta">Consulta o Propuesta:</label>
      <textarea id="consulta" name="consulta" rows="4" required></textarea>

      <button type="submit" name="submit">Enviar</button>
    </form>
  </section>

  <section class="tipocontacto">
    <h2>Por otras consultas contactanos:</h2>
    <nav>
      <li>Correo: PULSEPROGRAMMING@GMAIL.COM</li>
      <li>Teléfono: 094 488 288</li>
    </nav>
  </section>

  <footer class="pie">
    <ul class="menufooter">
      <li class="elementomenu">
        <a href="../../index.php" class="menu-icon">Inicio</a>
      </li>
      <li class="elementomenu">
        <a href="../pages/servicios.php" class="menu-icon">Servicios</a>
      </li>
      <li class="elementomenu">
        <a href="../pages/empresas.php" class="menu-icon">Empresas</a>
      </li>
    </ul>
    <p class="text">2024 | Todos los derechos reservados</p>
  </footer>
</body>

</html>