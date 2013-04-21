<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>Administracion de Socios</h1>

<td><?php echo Form::open('socio/new1/'); ?>
    <?php echo Form::submit("submit", "Nuevo"); ?><?php echo Form::close(); ?></td>

<fieldset width="200px">
    <legend><strong>Criterios de Busqueda</strong></legend>
    <table align="center">
        <tr><td>Codigo: </td><td><input type="text" name="id"></td>
            <td>Estado: </td>
            <td><?php
                echo "Activo";
                echo Form::radio("boton", 1, $checked = TRUE);
                ?>
                <?php
                echo "Inactivo";
                echo Form::radio("boton", 2, $checked = FALSE);
                ?>
                <?php
                echo "Retirado";
                echo Form::radio("boton", 2, $checked = FALSE);
                ?>
            </td>
        </tr>
        <tr><td>Nombre: </td><td><input type="text" name="nombre"></td>
            <td>Tipo de Socio: </td>
            <td><select name="tiposocio">
                    <option value="1">Regular</option>
                    <option value="2">Buen Pagador</option>
                    <option value="3">Moroso</option>
                    <option value="4">Vitalicio</option>
                </select></td>
        </tr>
        <tr>
            <td>Apellido: </td><td><input type="text" name="appaterno"></td>
            <td>Membresia: </td>
            <td><?php
                echo "Titular";
                echo Form::radio("boton2", 1, $checked = TRUE);
                ?>
                <?php
                echo "Conyuge";
                echo Form::radio("boton2", 2, $checked = FALSE);
                ?>
                <?php
                echo "Asociado";
                echo Form::radio("boton2", 2, $checked = FALSE);
                ?>
            </td>
        </tr>
        <tr><td></td><td><input type="button" name="buscar" value="Buscar"><td></tr>
    </table>
</fieldset>
<br><br>

<table align="center">
    <tr>
        <td>Codigo</td><td>Nombre</td><td>Apellido</td><td>Estado</td><td>Tipo de Socio</td><td>Membresia</td>
    </tr>
    <?php foreach ($socios as $socio) : ?>
        <tr>
            <td><?php echo $socio->id; ?></td>
            <td><?php echo $socio->nombre; ?></td>
            <td><?php echo $socio->apaterno; ?></td>
            <td>
                <?php
                if ($socio->estado == 1) {
                    echo "Activo";
                } else if ($solicitante->estado == 2) {
                    echo "Inactivo";
                } else {
                    echo "Retirado";
                }
                ?></td>
            <td>
                <?php
                if ($socio->tiposocio == 1) {
                    echo "Regular";
                } else if ($socio->estado == 2) {
                    echo "Buen Pagador";
                } else if ($socio->estado == 3) {
                    echo "Moros";
                } else {
                    echo "Vitalicio";
                }
                ?></td>
            <td>
                <?php
                if ($socio->tipomem == 1) {
                    echo "Titular";
                } else if ($socio->estado == 2) {
                    echo "Conyugue";
                } else {
                    echo "Asociado";
                }
                ?></td>
            <!--<td><?php //echo $socio->solicitante_id;
                    //$solicitante_id = $socio->solicitante_id;
                    //$solicitante = new Model_Solicitante($solicitante_id);
                    //$solicitante = new Model_Solicitante($solicitante_id);
                    //echo $solicitante->name;                   
                    ?></td>-->
        <td><?php echo Form::open('socio/edit/' . $socio->id); ?>
                <?php echo Form::submit("submit", "Editar"); ?><?php echo Form::close(); ?></td>
            <td><?php echo Form::open('socio/delete/' . $socio->id); ?>
                <?php echo Form::submit("submit", "Eliminar"); ?><?php echo Form::close(); ?></td>
            </tr>
    <?php endforeach; ?>
</table>