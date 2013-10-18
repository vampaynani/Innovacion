<?php

class AdminController extends BaseController{
	protected $layout = 'layout.admin';
	public function __construct(){
		/*
		View::share('profile_image', $img);
	    View::share('username', $me['username']);
	    View::share('name', $me['name']);
	    */
	}
	public function getIndex(){
		return $this->layout->content = View::make('admin.login');
	}
	public function postIndex(){
		if(Input::has('usr') && Input::has('pwd')){
			if(Input::get('usr')==='Admin' && Input::get('pwd') === '4dm1n'){
				return Redirect::to('admin/content');		
			}else{
				return $this->layout->content = View::make('admin.login');	
			}
		}else{
			return $this->layout->content = View::make('admin.login');
		}
	}
	public function getContent(){		
		$files = Archivo::all();
		$subcats = Subcategoria::all();
		return $this->layout->content = View::make('admin.content', array('files'=>$files, 'subcats'=>$subcats));
	}
	public function postContent(){
		if(Input::has('del')){
			Archivo::destroy(Input::get('del'));
		}else if(Input::has('id')){
			$archivo = Archivo::find(Input::get('id'));
			if(Input::hasFile('thumb')){
				Input::file('thumb')->move('./previews/', Input::file('thumb')->getClientOriginalName());
				$tpath = Input::file('thumb')->getClientOriginalName();	
				$archivo->imgArch = $tpath;
			}
			if(Input::has('name')) $archivo->nomArch = Input::get('name');
			if(Input::has('desc')) $archivo->descArch = Input::get('desc');
			if(Input::has('subcat')) $archivo->subcat_id = Input::get('subcat');
			switch($archivo->tarch_id){
				case 1:
				case 3:
				if(Input::hasFile('file')){
					Input::file('file')->move('./uploads/', Input::file('file')->getClientOriginalName());
					$fpath = Input::file('file')->getClientOriginalName();
					$archivo->linkArch = $fpath;
				}
				break;
				case 2:
				case 4:
				if(Input::has('url')) $archivo->linkArch = Input::get('url');
				break;
			}
			$archivo->save();
		}else if(Input::has('tarch')){
			$archivo = new Archivo;
			Input::file('thumb')->move('./previews/', Input::file('thumb')->getClientOriginalName());
			$tpath = Input::file('thumb')->getClientOriginalName();
			$archivo->nomArch = Input::get('name');
			$archivo->imgArch = $tpath;
			$archivo->descArch = Input::get('desc');
			$archivo->subcat_id = Input::get('subcat');
			$archivo->tarch_id = Input::get('tarch');
			switch(Input::get('tarch')){
				case 1:
				case 3:
				Input::file('file')->move('./uploads/', Input::file('file')->getClientOriginalName());
				$fpath = Input::file('file')->getClientOriginalName();
				$archivo->linkArch = $fpath;
				break;
				case 2:
				case 4:
				$archivo->linkArch = Input::get('url');
				break;
			}
			$archivo->save();
		}
		return Redirect::to('admin/content');
	}
}