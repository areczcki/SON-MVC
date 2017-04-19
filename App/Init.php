<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap{
	
	private $routes;
	
	protected function initRoutes(){
		
		$arr["home"] 	= array("route" => "/", "controller" => "index", "action" => "index");
		$arr["empresa"] = array("route" => "/empresa", "controller" => "index", "action" => "empresa");
		$arr["nosso_trabalho"] = array("route" => "/nosso_trabalho", "controller" => "index", "action" => "nossoTrabalho");
		$arr["localizacao"] = array("route" => "/localizacao", "controller" => "index", "action" => "localizacao");
		$arr["fale_conosco"] = array("route" => "/fale_conosco", "controller" => "index", "action" => "faleConosco");
		
		$arr["newsletter"] = array("route" => "/newsletter", "controller" => "index", "action" => "newsletter");
		$arr["enviarNewsletter"] = array("route" => "/enviarNewsletter", "controller" => "index", "action" => "enviarNewsletter");
		
		$this->setRoutes($arr);
		
	}
	
}