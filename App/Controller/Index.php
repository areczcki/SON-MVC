<?php

namespace App\Controller;

use SON\Controller\Action;
use SON\FormValidation\FormElement;
use SON\FormValidation\Form;

class Index extends Action{
	
	public function Index(){
		//http://localhost:8080/
		//echo"Controller: Index, Action: index";
		if($this->randomView()){
			$this->render('home');
		}else{
			$this->render('home2');
		}
	}
	
	public function empresa(){
		//http://localhost:8080/empresa
		//echo"Controller: Index, Action: empresa";
		if($this->randomView()){
			$this->render('empresa');
		}else{
			$this->render('empresa2');
		}
	}
	
	public function nossoTrabalho(){
		//echo"Controller: Index, Action: nossoTrabalho";
		if($this->randomView()){
			$this->render('nossoTrabalho');
		}else{
			$this->render('nossoTrabalho2');
		}
	}
	
	public function localizacao(){
		//echo"Controller: Index, Action: localizacao";
		if($this->randomView()){
			$this->render('localizacao');
		}else{
			$this->render('localizacao2');
		}
	}
	
	public function faleConosco(){
		//echo"Controller: Index, Action: faleConosco";
		$this->render('faleConosco');
	}
	
	public function newsletter(){
		$this->view->teste = 'Alexandre Form';
		
		$form = new FormElement('/enviarNewsletter', 'teste', 'post');
		
		$form->arrayView = array(
				0 => array('component' => 'input', 		'name' => "email", 		'type'=> "text", 'label' => "Email", 	"class" => "",	"placeholder" 	=> "Campo de Email"),
				1 => array('component' => 'input', 		'name' => "nome", 		'type'=>" text", 'label' => "Nome",		"class" => "",	"placeholder" 	=> "Campo Nome"),
				2 => array('component' => 'textarea', 	'name' => "descricao", 	'label' => "Descricao",	"class" => "",	"placeholder" => "Campo Descricao!!!"),
				
				3 => array('component' => 'select',		'name'=>'opcao',		'label' => "Teste",
						'option' => array(
								array('value' => 1, 'text' => 'renault'),
								array('value' => 2, 'text' => 'volvo')
						),
				),
				
				4 => array('component' => 'input', 		'value'=> "Salvar",		'type'=> "submit",)
		);
		
// 		echo"<pre/>";
// 		print_r($form->arrayView);exit;
		
		$this->view->form = $form;
		
		$this->render('newsletter', false, true);
	}
	
	private function randomView(){
		return rand(0,1);
	}
	
	
	public function enviarNewsletter(){
		echo"<pre/>";
		print_r($_POST);
		exit;
	}
	
}