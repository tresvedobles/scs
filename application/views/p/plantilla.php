 <!doctype html>
  <html lang="<?php print I18n::$lang ?>">
      <head>
          <meta charset="utf-8">
          <title><?php print $titulo ?></title>
          <?php foreach ($styles as $file => $type) print HTML::style($file, array('media' => $type)); ?>
          <?php foreach ($scripts as $file) print HTML::script($file); ?>
      </head>
      <body>

      <div id="banner">
        Digamos que aqui esta el banner....
      </div>
          <?php print $contenidos; ?>
      </body>

      <div id="footer">
        Aqui va el footer...
      </div>
  </html>
