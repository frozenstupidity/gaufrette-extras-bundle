<?php

namespace KPhoen\GaufretteExtrasBundle\Twig;

class GaufretteExtrasExtension extends \Twig_Extension
{
    protected $filesystem_map;


    public function __construct($map)
    {
        $this->filesystem_map = $map;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('resolve', array($this, 'resolve')),
        );
    }

    public function resolve($url, $fs)
    {
        return $this->filesystem_map->get($fs)->resolve($url);
    }

    public function getName()
    {
        return 'gaufrette_extras_extension';
    }
}
