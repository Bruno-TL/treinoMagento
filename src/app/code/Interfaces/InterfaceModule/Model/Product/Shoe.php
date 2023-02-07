<?php

namespace Interfaces\InterfaceModule\Model\Product;

use Interfaces\InterfaceModule\Api\NameInterface;

class Shoe
{
    protected $name;
    public function __construct(NameInterface $name)
    {
        $this->name = $name;
    }

    public function getShoe()
    {
        return "My shoe is {$this->name->getName()}";
    }
}