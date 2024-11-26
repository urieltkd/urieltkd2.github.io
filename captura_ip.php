<?php
// Captura la IP del visitante
$ip = $_SERVER['REMOTE_ADDR'];
// Guarda la IP en un archivo de log
file_put_contents('ips.txt', "IP capturada: " . $ip . "\n", FILE_APPEND);

// Si se desea simular un formulario de inicio de sesión falso
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    // Aquí puedes añadir más lógica si necesitas
    // "procesar" la información, pero en este caso solo mostramos un mensaje

    echo "Has iniciado sesión con el usuario: " . htmlspecialchars($usuario);
} else {
    echo '
    <html>
        <body>
            <h2>Iniciar sesión</h2>
            <form method="POST">
                Usuario: <input type="text" name="usuario"><br><br>
                Contraseña: <input type="password" name="password"><br><br>
                <input type="submit" value="Iniciar sesión">
            </form>
        </body>
    </html>
    ';
}
?>