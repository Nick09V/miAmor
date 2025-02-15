<?php
class Conexion {
    private $host = "ban0gvy55ay8ekm26nv1-mysql.services.clever-cloud.com"; // Cambia si es necesario
    private $usuario = "ulehrllhouxef1fc"; // Tu usuario de MySQL
    private $password = "ByBSrXZY2DAA65a9idre"; // Tu contraseña de MySQL
    private $base_datos = "ban0gvy55ay8ekm26nv1"; // Nombre de la BD
    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->base_datos);
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function cerrarConexion() {
        $this->conexion->close();
    }
}
?>
