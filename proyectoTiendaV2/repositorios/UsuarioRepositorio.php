<?php
    namespace repositorios;
    use lib\Database;
    use PDO;
    class UsuarioRepositorio {

        public function getAll(){

            
            $conexion=new Database();
            $sql="SELECT * FROM usuarios";
            $resultado=$conexion->prepare($sql);
            $resultado->execute();
            
            //Recorro el resultado
            while ($personas = $resultado->fetch(PDO::FETCH_ASSOC)){ 
                echo $personas['id']." ".$personas['nombre']."<br>";
            }
        }

        public function insert($id,$nombre,$apellidos,$email,$password,$rol){
            $conexion=new Database();
            $sql="INSERT INTO `usuarios`(`id`, `nombre`, `apellidos`, `email`, `password`, `rol`) VALUES (:id,:nombre,:apellidos,:email,:password,:user)";
            $user="user";
            $id=null;
            $resultado=$conexion->prepare($sql);
            
            $resultado->bindParam(':id', $id);
            $resultado->bindParam(':nombre', $nombre);
            $resultado->bindParam(':apellidos', $apellidos);
            $resultado->bindParam(':email', $email);
            $resultado->bindParam(':password', $password);
            $resultado->bindParam(':user', $rol);
            

            $resultado->execute();
            
            
           /*  $sql="INSERT INTO usuarios values(null,$nombre,$apellidos,$email,$password,null)";
            $resultado=$conexion->prepare($sql);
            $resultado->execute(); */
        }

        

        
    }


    