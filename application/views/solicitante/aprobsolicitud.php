<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>Aprobacion de solicitud</h1>

<fieldset width="200px">
    <legend><strong>Criterios de Busqueda</strong></legend>
    <table align="center">
        <tr><td>Codigo: </td><td><input type="text" name="id"></td></tr>
        <tr><td>Nombre: </td><td><input type="text" name="nombre"></td></tr>
        <tr><td>Apellido: </td><td><input type="text" name="appaterno"></td></tr>
        <tr><td></td><td><input type="button" name="buscar" value="Buscar"><td></tr>
    </table>
</fieldset>
<br><br>
<table align="center">
    <tr>
        <td>Codigo</td><td>Nombre</td><td>Apellido Paterno</td><td>Estado</td>
    </tr>
    <?php foreach ($solicitantes as $solicitante) : ?>
        <tr>
            <td><?php echo $solicitante->id; ?></td>
            <td><?php echo $solicitante->nombre; ?></td>
            <td><?php echo $solicitante->apaterno; ?></td>
            <td>
                <?php
                if ($solicitante->estado == 1) {
                    echo "En proceso";
                } else if ($solicitante->estado == 2) {
                    echo "Aceptado";
                } else {
                    echo "Denegado";
                }
                ?></td>
            <td><input type="checkbox" name="check"></td>
            <td><?php echo Form::open('solicitante/verobjeciones/' . $solicitante->id); ?>
                <?php echo Form::submit("submit", "Objeciones"); ?><?php echo Form::close(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<table align="center">
    <tr>
        <td><input type="button" name="buscar" value="Aprobar Solicitudes"></td>
    </tr>
</table>