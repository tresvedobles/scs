<?php

class Controller_Principal extends Controller_Template {
  public $template = 'p/plantilla';

  public function before() { // se llama antes de la ejecucion del controlador
    parent::before();
    if ($this->auto_render) {

      $this->template->titulo = '';
      $this->template->contenidos = '';

      $this->template->styles = array();
      $this->template->scripts = array();
    }
  }

  public function after() { // modificaciones finales... 
      if ($this->auto_render) {
        $styles = array(
          'media/css/screen.css' => 'screen, projection',
          'media/css/print.css' => 'print',
          'media/css/style.css' => 'screen',
        );
  
        $scripts = array(
          'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',
        ); // agregaando scripts
    
        // juntando todo

        $this->template->styles = array_merge( $this->template->styles, $styles );
        $this->template->scripts = array_merge( $this->template->scripts, $scripts );
      }

      parent::after();

  }
}
