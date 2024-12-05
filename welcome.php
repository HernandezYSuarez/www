<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expreso S</title>
    <link rel="stylesheet" href="stilitos.css">
</head>
<body>
    <div id="main">
        <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>

        <form action="recoger2.php" method="post">
            <div class="form-group">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                <label>Digite su Nombre y apellidos</label>
                <input type="text" name="nombre" placeholder="Digite nombre">
            </div>

            <div class="form-group">
                <label>Digite su Edad</label>
                <input type="number" name="Edad" min="1" max="90" required placeholder="Edad">
            </div>

            <div class="form-group">
                <label>Seleccione fecha de viaje</label>
                <input type="date" name="Fecha" required>
            </div>

            <div class="form-group">
                <label for="VIP">Es usted un cliente VIP?</label>
                <input type="radio" name="VIP" value="si">Si
                <input type="radio" name="VIP" value="no">No
            </div>

            <div class="form-group">
                <label>Dirección de residencia</label>
                <input type="text" name="Direccion" placeholder="Digite direccion">
            </div>

            <div class="form-group">
                <label>Seleccione Ciudad Destino</label>
                <select name="Provincia">
                    <option>Madrid</option>
                    <option>Sevilla</option>
                    <option>Bilbao</option>
                    <option>Barcelona</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
        <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>






