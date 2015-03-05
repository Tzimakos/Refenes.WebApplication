<?php

namespace Geo\AppBundle\Twig;

class GlobalsExtension extends \Twig_Extension
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getGlobals()
    {
        return array(
            "project" => $this->container->getParameter('project'),
        );
    }

    function getName()
    {
        return 'globals_extension';
    }
}