<?php

namespace Interfaces\InterfaceModule\Model;

use Interfaces\InterfaceModule\Api\MaterialInterface;
use Interfaces\InterfaceModule\Api\SizeInterface;
class SizeGreat implements SizeInterface
{
    protected $material;
    public function __construct(MaterialInterface $material)
    {
        $this->material = $material;
    }

    public function getSize()
    {
        return "Great";
    }
}