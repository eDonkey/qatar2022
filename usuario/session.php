<?php
session_start();
if (!isset($_SESSION['token']) ) {
?>
<form action="usuario/login.php" method="post"> <input type="hidden" name="_ref" value="<?php echo $_SERVER['PHP_SELF'] ?>" /> Usuario: <input type="text" name="email" id="email" />&nbsp;&nbsp;&nbsp;&nbsp;Contraseña: <input type="password" name="password" id="password" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Ingresar" /></form><br />
<?php
} else {
?>
<p>Hola <?php echo $_SESSION['nombre']; ?>! -- <a href="http://">Mi Perfil</a> - <a href="usuario/logout.php">Cerrar sesion</a></p>
<?php } ?>