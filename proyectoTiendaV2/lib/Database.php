<?php 
    namespace lib;
    use PDO;
    class Database extends PDO{

        public function __construct(){
            $servidor="localhost";
            $usuario="root";
            $password="";
            $typeDb="mysql";
            $bd="tienda";
            
            try{
                
                parent::__construct("$typeDb:host=$servidor;dbname=$bd",$usuario,$password);
                $conexion= new PDO("$typeDb:host=$servidor;dbname=$bd",$usuario,$password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión realizada Satisfactoriamente";
                
                
            }catch(PDOException $e){
                echo "La conexión ha fallado: " . $e->getMessage();
            }
            
        }

        

            /**
             * Get the value of servidor
             */ 
            public function getServidor()
            {
                        return $this->servidor;
                        
            }

            /**
             * Get the value of usuario
             */ 
            public function getUsuario()
            {
                        return $this->usuario;
            }

            /**
             * Get the value of password
             */ 
            public function getPassword()
            {
                        return $this->password;
            }

            /**
             * Get the value of bd
             */ 
            public function getBd()
            {
                        return $this->bd;
            }
    }

    
    


    