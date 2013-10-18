<?php
class Carta extends Eloquent {
	protected $table = 'cartas';
	protected $fillable = array('email', 'compromiso');
	public $timestamps = false;
}