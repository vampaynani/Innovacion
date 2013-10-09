<?php

class Archivo extends Eloquent {
	protected $table = 'archivos';
	protected $fillable = array('nomArch', 'linkArch', 'tarch_id');
}