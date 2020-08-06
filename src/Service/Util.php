<?php namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation;
use Symfony\Component\Routing\Annotation\Route;

class Util {
	public function venToEur($value) {
		return round(($value/7.55),2);
	}

    public function __construct() {
		
    }
}