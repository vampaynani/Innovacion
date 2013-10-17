<?php

class Subcategoria extends Eloquent {
	protected $table = 'subcategorias';
	protected $fillable = array('nomSub', 'colorSub', 'descSub', 'categoria_id');
	public $timestamps = false;
	public function categoria(){
		return $this->belongsTo('Categoria', 'categoria_id');
	}
	public function archivos(){
		return $this->hasMany('Archivo', 'subcat_id');
	}
}