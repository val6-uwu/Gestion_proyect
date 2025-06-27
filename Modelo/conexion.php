<?php
class Conexion {
    private $con;

    public function __construct() {
        $this->con = new mysqli('localhost', 'root', '', 'bd_ranti');

        // Verifica si hay error en la conexión
        if ($this->con->connect_error) {
            die("Error de conexión: " . $this->con->connect_error);
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

    public function getProductos() {
    $query = "SELECT p.*, c.name_categoria as categoria_nombre, 
                     sc.nombre_subcategoria as subcategoria_nombre
              FROM productos p
              JOIN categoria c ON p.categoria = c.categoria_id
              JOIN subcategories sc ON p.subcategoria = sc.subcategoria_id
              ORDER BY p.fecha_creado DESC";
    
    $result = $this->con->query($query);
    $productos = array();
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
    return $productos;
    }
    /**
     * Obtiene un producto por su ID
     * @param int $id ID del producto
     * @return array|null Datos del producto o null si no existe
     */
    public function getProductoById($id) {
        $query = "SELECT p.*, c.name_categoria as categoria_nombre, 
                         sc.nombre_subcategoria as subcategoria_nombre
                  FROM productos p
                  JOIN categoria c ON p.categoria = c.categoria_id
                  JOIN subcategories sc ON p.subcategoria = sc.subcategoria_id
                  WHERE p.id = ?";
        
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_assoc();
    }

    /**
     * Obtiene productos relacionados (misma categoría)
     * @param int $categoriaId ID de la categoría
     * @param int $excludeId ID del producto a excluir
     * @param int $limit Límite de productos a devolver
     * @return array Lista de productos relacionados
     */
    public function getProductosRelacionados($categoriaId, $excludeId, $limit = 4) {
        $query = "SELECT p.id, p.nombre, p.precio, p.imagen_url, 
                         c.name_categoria as categoria_nombre
                  FROM productos p
                  JOIN categoria c ON p.categoria = c.categoria_id
                  WHERE p.categoria = ? 
                  AND p.id != ?
                  AND p.stock > 0
                  ORDER BY RAND()
                  LIMIT ?";
        
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('iii', $categoriaId, $excludeId, $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $productos = [];
        while ($row = $result->fetch_assoc()) {
            $productos[] = $row;
        }
        return $productos;
    }
    public function getEmprendedores() {
    $query = "SELECT u.user_id, u.nombre, u.email,u.foto_perfil,
                     v.negocio, v.descripcion, v.ciudad, v.estado_activo
              FROM usuarios u
              JOIN vendedores v ON u.user_id = v.user_id
              WHERE u.tipo_usuario = 'vendedor'
              AND v.estado_activo = 1
              ORDER BY u.nombre";
    
    $result = $this->con->query($query);
    $emprendedores = array();
    while ($row = $result->fetch_assoc()) {
        $emprendedores[] = $row;
    }
    return $emprendedores;
}

public function getVendedorById($id) {
    $query = "SELECT u.user_id, u.nombre, u.email, u.foto_perfil,
                     v.negocio, v.descripcion, v.ciudad, v.estado_activo
              FROM usuarios u
              JOIN vendedores v ON u.user_id = v.user_id
              WHERE u.user_id = ?";
    
    $stmt = $this->con->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->fetch_assoc();
}

public function getProductosByVendedor($vendedor_id) {
    $query = "SELECT p.*, c.name_categoria as categoria_nombre
              FROM productos p
              JOIN categoria c ON p.categoria = c.categoria_id
              WHERE p.vendedor_id = ?
              AND p.stock > 0
              ORDER BY p.fecha_creado DESC";
    
    $stmt = $this->con->prepare($query);
    $stmt->bind_param('i', $vendedor_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $productos = array();
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
    return $productos;
}

}
?>
