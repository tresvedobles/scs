<?php 
  defined('SYSPATH') or die('No hay framework');
  class Controller_Grilla extends Controller {

    public function action_mostrarGrilla() {
//$x = array('Lucia', 'Jacklin', 'Mariana');
      $this->response->body(View::factory('vistagrilla', array('arr' => array('Lucia', 'Jacklin', 'Mariana'))));
    }
  }
