<?php

class Categoria extends Eloquent {
	protected $table = 'categorias';
	protected $fillable = array('nomCat', 'descCat');
	public $timestamps = false;
	public function subcats(){
		return $this->hasMany('Subcategoria', 'categoria_id');
	}
}