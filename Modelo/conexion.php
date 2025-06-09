<?php
class Conexion {
    private $con;
    public function __construct() {
        $this->con = new mysqli('localhost', 'root', '', 'bd_ranti');

        // Verifica si hay error en la conexión
        if ($this->con->connect_error) {
            die("Error de conexión: " . $this->con->connect_error);
        } else {
            echo "Conexión exitosa a la base de datos.";
        }
    }
    // Método público para obtener la conexión
    public function getConexion() {
        return $this->con;
    }

    public function loginUser($email, $contrasena)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $this->con->query($sql);
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            // Verificar la contraseña
            if (password_verify($contrasena, $user['contrasena'])) {
                // Iniciar sesión y almacenar información del usuario en la sesión
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['nombre'] = $user['nombre'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['tipo_usuario'] = $user['tipo_usuario'];
                return true;
            }
        }
        return false;
    }

    //Registrar Email


    //

    // ver usuario
    public function getUserRole($email) {
        $query = "SELECT tipo_usuario FROM usuarios WHERE email = ?";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row ? $row['tipo_usuario'] : null;
    }

}
?>
