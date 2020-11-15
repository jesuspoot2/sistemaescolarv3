<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor\autoload.php';
require 'config\database.php';

$users = DB::table('calificaciones')->avg('calificacion');
$promedio = number_format($promedio, 1);
echo <<<_TABLE
<table class="table">
<thead>
    <tr>
        <th> #ID </th>
        <th> Calificacion </th>
        <th> colspan='2> operaciones </th>
    </tr>
</thead>
<tfoot>
    <tr>
        <th>Promedio: </th>
        <th> $promedio </th>
    </tr>
</tfoot>
<tbody>
_TABLE;
foreach($users as $fila){
    echo <<<_ROW
    <tr>
        <th>$fila->idcalificacion </th>
        <th>{$fila->nombre} {$fila->primer_apellido} {$fila->segundo_apellido}
        <td><a class='button' href'delete.php?id={$fila->idcalificacion}'>ELIMINAR </a>
        <td>
            <form action="update.php" method="post">
                <input id="idcalificacion" type="text" name"idcalificacion"
                value="{$fila->idcalificacion}" hidden>
                <input id="calificacion" type="text" name"calificacion" size="3">
                <input class="button" type="submit" value="ACTUALIZAR">
            </form>
        </td>
    </tr>
    _ROW;
};