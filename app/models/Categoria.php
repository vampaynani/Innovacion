<?php

class Categoria extends Eloquent {
	protected $table = 'categorias';
	protected $fillable = array('nomCat', 'descCat');
	public $timestamps = false;
}