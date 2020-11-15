<?php
use Illuminate\Database\Capsule\Manager as BD;

require 'vendor\autoload.php';
require 'config\database.php';

DB::table('calificaciones')->where('idcalificacion',$_GET['id'])->delete();

echo "Se eliminó las calificaciones con el id : {$_GET['id']}
<a class='button' href='consultar.php'>Regresar</a>";