<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>Informacion del Socio</h1>

<?php echo Form::open('socio/post/' . $socio->id); ?>
<fieldset width="200px">
    <legend><strong>Datos Personales</strong></legend>
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>Contrasena: </td><td><?php echo Form::input("contrasena", $socio->contrasena); ?></td>
            <td>Direccion : </td><td><?php echo Form::input("direccion", $socio->direccion); ?></td>
        </tr>
        <tr>
            <td>Nombre: </td><td><?php echo Form::input("nombre", $socio->nombre); ?></td>
            <td>Tipo de Documento: </td><td><?php echo Form::input("tipodoc", $socio->tipodoc); ?></td>
        </tr>
        <tr>
            <td>Apellido Paterno: </td><td><?php echo Form::input("apaterno", $socio->apaterno); ?></td>
            <td>Numero de Documento: </td><td><?php echo Form::input("numdoc", $socio->numdoc); ?></td>
        </tr>
        <tr>
            <td>Apellido Materno: <td><?php echo Form::input("amaterno", $socio->amaterno); ?></td></td>
            <td>Telefono: </td><td><?php echo Form::input("telefono", $socio->telefono); ?></td>
        </tr>
        <tr>
            <td>Fecha Nacimiento: <td><?php echo Form::input("fechanac", $socio->fechanac); ?></td></td>
            <td>Celular: </td><td><?php echo Form::input("celular", $socio->celular); ?></td>
        </tr>
        <tr>
            <td>Correo: </td><td><?php echo Form::input("correo", $socio->correo); ?></td>
        </tr>
    </table>
</fieldset>
<fieldset>
    <legend><strong>Datos Membresia</strong></legend>
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>Estado: </td>
            <td><?php echo "Activo"; ?><?php echo Form::radio("boton", $socio->estado, $checked = TRUE); ?>
                <?php echo "Inactivo"; ?><?php echo Form::radio("boton", $socio->estado, $checked = FALSE); ?>
                <?php echo "Retirado"; ?><?php echo Form::radio("boton", $socio->estado, $checked = FALSE); ?></td>
        </tr>
        <tr>
            <td>Tipo de Socio: </td><td><?php
                $tipos[] = "Regular";
                $tipos[] = "BuenPagador";
                $tipos[] = "Moroso";
                $tipos[] = "Vitalicio";
                echo Form::select("tiposocio", $tipos, $selected = $socio->tiposocio);
                ?></td>
            <td>Fecha Inicio: </td><td><?php echo Form::input("fechainicio", $socio->fechainicio); ?></td>
        </tr>
        <tr>
            <td>Membresia: </td>
            <td><?php echo "Titular"; ?><?php echo Form::radio("boton2", $socio->tipomem, $checked = TRUE); ?>
<?php echo "Conyugue"; ?><?php echo Form::radio("boton2", $socio->tipomem, $checked = FALSE); ?>
<?php echo "Asociado"; ?><?php echo Form::radio("boton2", $socio->tipomem, $checked = FALSE); ?></td>      
            <td>Fecha Fin: </td><td><?php echo Form::input("fechafin", $socio->fechafin); ?></td>

    </table>
</fieldset>
<table>
    <tr>
        <td><?php echo Form::submit("submit", "Guardar"); ?></td>
    </tr>
</table>
<?php echo Form::close(); ?>

