<?php defined('SYSPATH') or die('No direct script access.');
  
  class Controller_Pagina extends Controller_Principal {
  
    public function action_inicio() {
      $this->template->titulo = 'Bienvenido a mi sitio web';
      
      $this->template->contenidos = View::factory('p/inicio' );
    }
    
    public function action_acerca() {
      $this->template->titulo = 'Acerca de esta pagina';
      
      $this->template->contenidos = View::factory('p/acerca' );
    }
    
  }

  // noten que no estoy cerrando el archivo php. Esto no es obligatorio, de hecho 
  // por razones de parsing, suele dejarse abierto  
