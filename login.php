<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor\autoload.php';
require 'config\database.php';

$user = DB::table('usuarios')->where('nombreusuario', $_POST['usuario'])->first();

$mensaje='';
if ($user->password == $_POST['password']) {
    $mensaje = "<h1> Bienvenido: {$user->nombreusuario} </h1>
    <br><a href= 'inicio.php'>Entrar al sistema escolar</a>";

} else{
    $mensaje = "<h1>Usuario o Contraseña erroneo Vuelva a intentar</h1>
    <br><a href= 'index.html'>Regresar</a>";
}

echo $mensaje;