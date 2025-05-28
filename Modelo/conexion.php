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
}
?>
