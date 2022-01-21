<?php

        
    class Usuario {
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $rol;

        function __construct(){
        
            
        }
        

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellidos
         */ 
        public function getApellidos()
        {
                return $this->apellidos;
        }

        /**
         * Set the value of apellidos
         *
         * @return  self
         */ 
        public function setApellidos($apellidos)
        {
                $this->apellidos = $apellidos;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

         /**
          * Get the value of password
          */ 
             public function getPassword()
                {
                                return $this->password;
                }

         /**
            * Set the value of password
            *
            * @return  self
            */ 
              public function setPassword($password)
                {
                                $this->password = $password;

                                return $this;
                }
        /**
         * Get the value of rol
         */ 
        public function getRol()
        {
                return $this->rol;
        }

        /**
         * Set the value of rol
         *
         * @return  self
         */ 
        public function setRol($rol)
        {
                $this->rol = $rol;

                return $this;
        }

    }

    

    