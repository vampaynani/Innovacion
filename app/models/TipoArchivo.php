<?php

class TipoArchivo extends Eloquent {
	protected $table = 'tarchivos';
	protected $fillable = array('nomTArch', 'descTArch');
}