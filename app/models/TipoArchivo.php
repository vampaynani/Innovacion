<?php

class TipoArchivo extends Eloquent {
	protected $table = 'tarchivo';
	protected $fillable = array('nomTArch', 'descTArch', 'categoria_id');
	public $timestamps = false;
}