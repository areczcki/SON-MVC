<?php

namespace App\Controller;

use SON\Controller\Action;

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
	
	private function randomView(){
		return rand(0,1);
	}
	
}