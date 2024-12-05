<?php
include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: welcome.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button.boton {
            background-color: #5c6bc0;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
        }

        button.boton:hover {
            background-color: #3f51b5;
        }

        .register-link {
            margin-top: 10px;
            display: block;
            font-size: 14px;
        }

        .register-link a {
            color: #5c6bc0;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Iniciar sesión</h2>
        <label for="username">Usuario:</label>
        <input type="text" name="username" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        
        <button type="submit" class="boton">Iniciar sesión</button>
        
        <div class="register-link">
            ¿Aún no te has registrado? <a href="register.php">Registrarse</a>
        </div>
    </form>
</body>
</html>
