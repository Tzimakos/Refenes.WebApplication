<?php

namespace Geo\AppBundle\Twig;

class GlobalsExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        );
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price;

        return $price;
    }

    public function getGlobals()
    {
        return array("app_name" => "asd", "app_ver" => "34");
    }

    function getName()
    {
        return 'globals_extension';
    }
}