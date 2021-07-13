<?php

class Database
{

    public $db; //controladores db
    private static $dns = "mysql:host=localhost;dbname=colegioispa"; //url de la BD
    private static $user = "root"; //usaurio de la conexion
    private static $pass = ""; //contraseña del usuario
    private static $instance; //instancia de la conexion

    public function __construct()
    {
        $this->db = new PDO(self::$dns, self::$user, self::$pass);
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
    public function insertarmateria($nombres)
    {

        try {
            $conexion = Database::getInstance(); //obtiene la instancia de la Clase
            $query = $conexion->db->prepare("INSERT INTO materias (nombres) 
                                            VALUES (:nombres)");
            $query->execute(
                array(
                    ':nombres' => $nombres
                )
            );

            return 1; //retorna 1 si fue exitoso

        } catch (PDOException $error) {
            return 0; // retorna 0 si falla
        }
    }

    public function validarnombre($nombre)
    {
        $conexion = Database::getInstance();
        $query = $conexion->db->prepare("SELECT nombre FROM materias WHERE nombre=:nombre");
        $query->execute(
            array(
                ":nombre" => $nombre
            )
        );
        return ($query);
    }
    public function datosmaterias()
    {
        $conexion = Database::getInstance();
        $query = $conexion->db->prepare('SELECT * from materias');
        $query->execute();
        return $query;
    }
    //---------------------        
    public function insertar($identificacion, $nombres, $apellidos, $email, $telefono)
    {

        try {
            $conexion = Database::getInstance(); //obtiene la instancia de la Clase
            $query = $conexion->db->prepare("INSERT INTO estudiantes (identificacion, nombres, apellidos, email, telefono ) 
                                            VALUES (:identificacion, :nombres, :apellidos, :email, :telefono)");
            $query->execute(
                array(
                    ':identificacion' => $identificacion,
                    ':nombres' => $nombres,
                    ':apellidos' => $apellidos,
                    ':email' => $email,
                    ':telefono' => $telefono
                )
            );

            return 1; //retorna 1 si fue exitoso

        } catch (PDOException $error) {
            return 0; // retorna 0 si falla
        }
    }

    public function validaridentificacion($identificacion)
    {
        $conexion = Database::getInstance();
        $query = $conexion->db->prepare("SELECT identificacion FROM estudiantes WHERE identificacion=:identificacion");
        $query->execute(
            array(
                ":identificacion" => $identificacion
            )
        );
        return ($query);
    }
    public function datosestudiantes()
    {
        $conexion = Database::getInstance();
        $query = $conexion->db->prepare('SELECT * from estudiantes');
        $query->execute();
        return $query;
    }



    //----------------

    public function insertarId($identificacion, $nombres, $apellidos, $username, $password)
    {

        try {
            $conexion = Database::getInstance(); //obtiene la instancia de la Clase
            $query = $conexion->db->prepare("INSERT INTO users (identificacion, nombres, apellidos, username, password) 
                                        VALUES (:identificacion, :nombres, :apellidos, :username, :password)");
            $query->execute(
                array(
                    ':identificacion' => $identificacion,
                    ':nombres' => $nombres,
                    ':apellidos' => $apellidos,
                    ':username' => $username,
                    ':password' => $password

                )
            );

            return 1; //retorna 1 si fue exitoso

        } catch (PDOException $error) {
            return 0; // retorna 0 si falla
        }
    }

    public function validarId($identificacion, $username)
    {
        $conexion = Database::getInstance();
        $query = $conexion->db->prepare("SELECT identificacion FROM users WHERE identificacion=:identificacion or username=:username");
        $query->execute(
            array(
                ":identificacion" => $identificacion,
                ":username" => $username

            )
        );
        return ($query);
    }
    public function datosId()
    {
        $conexion = Database::getInstance();
        $query = $conexion->db->prepare('SELECT * from users');
        $query->execute();
        return $query;
    }
}
