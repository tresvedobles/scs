<?php
defined('SYSPATH') or die ('No se ha cargado el framework.');

class Controller_Saludo extends Controller {
	public function action_index() {
		$this->response->body('Hola todo el mundo');
	}
}

?>
