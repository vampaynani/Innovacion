<?php

class HomeController extends BaseController{
	protected $layout = 'layout.site';
	public function welcome(){
		return $this->layout->content = View::make('index');
	}
	public function premio(){
		return $this->layout->content = View::make('premio');
	}
	public function inspiracion(){
		return $this->layout->content = View::make('inspiracion');
	}
	public function herramientas(){
		return $this->layout->content = View::make('herramientas');
	}
	public function documentacion(){
		return $this->layout->content = View::make('documentacion');
	}
	public function getIpad(){
		return $this->layout->content = View::make('ipad');
	}
	public function postIpad(){
		return $this->layout->content = View::make('ipad_response');
	}
	public function equipo(){
		return $this->layout->content = View::make('equipo');
	}
	public function faq(){
		return $this->layout->content = View::make('faq');
	}
}