<?php

namespace Interfaces\InterfaceModule\Model;

use Interfaces\InterfaceModule\Api\MaterialInterface;
class MaterialSynthetic implements MaterialInterface
{
    public function getMaterial()
    {
        return "Synthetic";
    }
}