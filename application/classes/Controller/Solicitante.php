<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Solicitante extends Controller {

    public function action_index() {
        $solicitantes = ORM::factory('solicitante')->find_all(); // loads all article object from table

        $view = new View('solicitante/index');
        $view->set("solicitantes", $solicitantes); // set "articles" object to view      
        $this->response->body($view);
    }

    public function action_new() {
        $solicitante = new Model_Solicitante();

        $view = new View('solicitante/edit');
        $view->set("solicitante", $solicitante);

        $this->response->body($view);
    }

    public function action_post() {
        $solicitante_id = $this->request->param('id');
        $solicitante = new Model_Solicitante($solicitante_id);
        $solicitante->values($_POST); // populate $article object from $_POST array
        $solicitante->save(); // saves article to database

        $solicitantes = ORM::factory('solicitante')->find_all(); // loads all article object from table

        $view = new View('solicitante/index');
        $view->set("solicitantes", $solicitantes); // set "articles" object to view

        $this->response->body($view);
    }

    public function action_edit() {
        $solicitante_id = $this->request->param('id');
        $solicitante = new Model_Solicitante($solicitante_id);

        $view = new View('solicitante/edit');
        $view->set("solicitante", $solicitante);

        $this->response->body($view);
    }

    public function action_delete() {
        $solicitante_id = $this->request->param('id');
        $solicitante = new Model_Solicitante($solicitante_id);

        $solicitante->delete();
        //AQUI ESTOY QUE HAGO DE NUEVO LO QUE HIZO EL INDEX, PERO EN VERDAD DEVERIA REDIRECCIONARLO
        //$this->request->redirect(self::INDEX_PAGE);
        $solicitantes = ORM::factory('solicitante')->find_all(); // loads all article object from table

        $view = new View('solicitante/index');
        $view->set("solicitantes", $solicitantes); // set "articles" object to view

        $this->response->body($view);
    }
    public function action_aprobacionsolicitud(){
        $solicitantes = ORM::factory('solicitante')->find_all(); 
        $view = new View('solicitante/aprobsolicitud');
        $view->set("solicitantes", $solicitantes);
        $this->response->body($view);
    }
    public function action_verobjeciones(){
        //$view= new View('solicitante/objeciones');
        //$view->response->body($view);
        $this->response->body(View::factory('solicitante/objeciones'));
    }
        
}

?>