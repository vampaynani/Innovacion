<?php

class Archivo extends Eloquent {
	protected $table = 'archivos';
	protected $fillable = array('nomArch', 'imgArch', 'linkArch', 'descArch', 'subcat_id', 'tarch_id');
	public function tarchivo(){
		return $this->belongsTo('TipoArchivo', 'tarch_id');
	}
	public function subcat(){
		return $this->belongsTo('Subcategoria', 'subcat_id');
	}
}