<?php
session_start();

class UsersList {
    private $conexion;

    function __construct() {
        // Configurar la conexión a la base de datos
        $host = "mysql"; // Cambiar según tu configuración
        $usuario = "root"; // Cambiar según tu configuración
        $contrasena = "root"; // Cambiar según tu configuración
        $base_datos = "codshare_crud_users"; // Cambiar según tu configuración

        // Conectar a la base de datos
        $this->conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    function verificarCredenciales($username, $password) {
        // Consulta para verificar las credenciales
        $query = "SELECT * FROM users WHERE login=? AND password=? AND active=0";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $resultado = $stmt->get_result();

        // Verificar si el usuario existe en la base de datos
        if ($resultado->num_rows == 1) {
            return true; // Credenciales válidas
        } else {
            return false; // Credenciales inválidas
        }
        
    }
}

// Verificar si se envió el formulario de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario de manera segura
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Instanciar la clase UsersList y verificar credenciales
    $usersList = new UsersList();
    if ($usersList->verificarCredenciales($username, $password)) {
        // Iniciar sesión y redirigir al menú
        $_SESSION['username'] = $username;
        header("Location: ../views/bienvenido.php");
    } else {
        // Usuario no encontrado, redirigir al formulario de login con mensaje de error
        header("Location: ../indexlogin.php");
        
    }
} else {
    // Redirigir si no se envió el formulario
    header("Location: ../indexlogin.php");
}
?>
