<?php namespace App\Twig;

use Twig\Extension\RuntimeExtensionInterface;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use App\Service\Util;

class AppRuntime implements RuntimeExtensionInterface {

	public function __construct() {

	}

	public function venToEur($value) {
		return round(($value/7.55),2);
	}
}