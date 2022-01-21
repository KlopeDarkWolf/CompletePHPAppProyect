<?php
    require_once 'lib/Database.php';
    require_once 'repositorios/UsuarioRepositorio.php';
    use lib\Database;
    use repositorios\UsuarioRepositorio;
    
require_once 'views/layout/header.php';
require_once 'views/layout/aside.php';


    $b= new UsuarioRepositorio();
    $b->getAll();
    $b->insert(null,"Cod","Aa","oles@hotmail.com","abCDF123","user");
    $b->getAll();
   
    require_once 'views/layout/footer.php';
?>