<?php
    require_once '../layout/header.php';
 ?>   
<form action=""  method="POST">

<label for="nombreR">Nombre</label><br>
<input type="text" name="nombreR"id="nombreR"><br>
<label for="apellidosR">Apellidos</label><br>
<input type="text" name="apellidosR" id="apellidosR"><br>
<label for="emailR">Email</label><br>
<input type="email" name="emailR" id="emailR"><br>
<label for="passwordR">Contraseña</label><br>
<input type="password" name="passwordR" id="passwordR"><br>

<button type="submit">Registrar</button>
</form>

<?php
    require_once '../layout/aside.php';
    require_once '../layout/footer.php';
?>