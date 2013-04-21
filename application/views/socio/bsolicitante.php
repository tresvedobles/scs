<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>Nuevo Socio</h1>

<fieldset width="200px">
    <legend><strong>Busqueda de Solicitante</strong></legend>
    <table align="center">
        <tr><td>Codigo: </td><td><input type="text" name="id"></td></tr>
        <tr><td>Nombre: </td><td><input type="text" name="nombre"></td></tr>
        <tr><td>Apellido: </td><td><input type="text" name="appaterno"></td></tr>
        <tr><td></td><td><input type="button" name="buscar" value="Buscar"><td></tr>
    </table>
</fieldset>
<br>
<table align="center">
    <tr><td>Seleccione a un solicitante para que sus datos personales se carguen en la siguiente ventana</td></tr>
</table>
<br>
<br>
<table align="center">
    <tr>
        <td>Codigo</td><td>Nombre</td><td>Apellido Paterno</td><td>Estado</td>
    </tr>
    <?php foreach ($solicitantes as $solicitante) : ?>
        <tr>
            <td><?php echo $solicitante->id; ?></td>
            <td><?php echo $solicitante->nombre; ?></td>
            <td><?php echo $solicitante->apaterno; ?></td>
            <td><?php echo $solicitante->apaterno; ?></td>
            <td><input type="radio" name="radio1"></td>
        </tr>
    <?php endforeach; ?>
    <tr><td><?php echo Form::open('socio/new/'); ?>
        <?php echo Form::submit("submit", "Siguiente"); ?><?php echo Form::close(); ?></td></tr>
</table>
<?php //LO QUE SE TIENE QUE HACER ES PASAR ESTO EN UN FORM, ASI COMO EL EDIT ?>