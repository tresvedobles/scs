<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Socio extends Controller {
    
    public function action_index() {
        $socios = ORM::factory('socio')->find_all();
        $view = new View('socio/index');
        $view->set("socios", $socios);  
        $this->response->body($view);
    }
    public function action_new() {
        $socio = new Model_Socio();

        $view = new View('socio/edit');
        $view->set("socio", $socio);

        $this->response->body($view);
    }
    public function action_new1(){
        $solicitantes = ORM::factory('solicitante')->find_all();
        $view = new View('socio/bsolicitante');
        $view->set("solicitantes",$solicitantes);
        $this->response->body($view);
    }
    public function action_post() {
        $socio_id = $this->request->param('id');
        $socio = new Model_Socio($socio_id);
        $tipo_socio = $this->request->param('tiposocio');
        if($tipo_socio == "Regurlar"){
            $socio->tiposocio=1;
        }
        else if($tipo_socio == "BuenPagador"){
            $socio->tiposocio=2;
        }
        else if($tipo_socio == "Moroso"){
            $socio->tiposocio=3;
        }
        else{
            $socio->tiposocio=4;
        }
        $socio->solicitante_id=1;
        $socio->values($_POST); 
        $socio->save(); 

        $socios = ORM::factory('socio')->find_all(); 

        $view = new View('socio/index');
        $view->set("socios", $socios); 

        $this->response->body($view);
    }
    public function action_edit() {
        $socio_id = $this->request->param('id');
        $socio = new Model_Socio($socio_id);
        $view = new View('socio/edit');
        $view->set("socio", $socio);
        $this->response->body($view);
    }
    public function action_delete() {
        $socio_id = $this->request->param('id');
        $socio = new Model_Socio($socio_id);

        $socio->delete();
        $socios = ORM::factory('socio')->find_all(); 

        $view = new View('socio/index');
        $view->set("socios", $socios); 

        $this->response->body($view);
    }
    
}
?>