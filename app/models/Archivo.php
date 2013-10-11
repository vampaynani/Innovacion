<?php

class Archivo extends Eloquent {
	protected $table = 'archivos';
	protected $fillable = array('nomArch', 'linkArch', 'tarch_id');
	public function tarchivo(){
		return $this->belongsTo('TipoArchivo', 'tarch_id');
	}
	public function subcat(){
		return $this->belongsTo('Subcategoria', 'subcat_id');
	}
}