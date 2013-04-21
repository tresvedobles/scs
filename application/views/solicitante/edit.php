<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>Informacion del Solicitante</h1>

<?php echo Form::open('solicitante/post/' . $solicitante->id); ?>
<fieldset width="200px">
    <legend><strong>Datos Personales</strong></legend>
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><?php echo Form::label("nombre", "Nombre: "); ?></td><td><?php echo Form::input("nombre", $solicitante->nombre); ?></td>
            <td>Tipo de Documento: </td><td><?php echo Form::input("tipodoc", $solicitante->tipodoc); ?></td>
        </tr>
        <tr>
            <td><?php echo Form::label("apaterno", "Apellido Paterno: "); ?></td><td><?php echo Form::input("apaterno", $solicitante->apaterno); ?></td>
            <td>Numero de Documento: </td><td><?php echo Form::input("numdoc", $solicitante->numdoc); ?></td>
        </tr>
        <tr>
            <td>Apellido Materno: <td><?php echo Form::input("amaterno", $solicitante->amaterno); ?></td></td>
            <td>Celular: </td><td><?php echo Form::input("celular", $solicitante->celular); ?></td>
        </tr>
        <tr>
            <td>Fecha Nacimiento: <td><?php echo Form::input("fechanac", $solicitante->fechanac); ?></td></td>
            <td>Correo: </td><td><?php echo Form::input("correo", $solicitante->correo); ?></td>
        </tr>
        <tr>
            <td>Direccion : </td><td><?php echo Form::input("direccion", $solicitante->direccion); ?></td>
        </tr>
    </table>
</fieldset>
<fieldset>
    <legend><strong>Datos Solicitud</strong></legend>
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td><?php echo Form::label("estado", "Estado: "); ?></td>
        <td><?php echo Form::label("proceso", "En Proceso"); ?><?php echo Form::radio("boton", $solicitante->estado, $checked = TRUE); ?>
            <?php echo Form::label("aceptado", "Aceptado"); ?><?php echo Form::radio("boton", $solicitante->estado, $checked = FALSE); ?>
            <?php echo Form::label("denegado", "Denegado"); ?><?php echo Form::radio("boton", $solicitante->estado, $checked = FALSE); ?></td>
        <!--<td>Recomendado1: </td><td><?php //echo Form::input("recomendado1", $solicitante->recomendado1); ?></td>-->
        </tr>
        <tr>
            <td>Fecha de Solicitud: </td><td><?php echo Form::input("fechasol", $solicitante->fechasol); ?></td>
            <!--<td>Recomendado2: </td><td><?php //echo Form::input("recomendado2", $solicitante->recomendado2); ?></td>-->
        </tr>
    </table>
</fieldset>
<table>
    <tr>
        <td><?php echo Form::submit("submit", "Guardar"); ?></td>
    </tr>
</table>
<?php echo Form::close(); ?>

