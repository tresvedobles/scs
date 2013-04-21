<html>
<body>
  <table>
    <thead>
      <tr><th>Indice</th><th>Valor</th></tr>
    </thead>
    <tbody>
    <?php foreach ($arr as $indice => $valor) { ?>
      <tr><td><?php print $indice; ?></td><td><?php print $valor; ?></td></tr>

    <?php } ?>
    <tbody>
  </table>
</body>

</html>
