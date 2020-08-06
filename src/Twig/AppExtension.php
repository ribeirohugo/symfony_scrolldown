<?php namespace App\Twig;

use App\Twig\AppRuntime;
use App\Service\Util;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return array(
            new TwigFunction('venToEur', array(AppRuntime::class, 'venToEur'))
        );
    }
	
}