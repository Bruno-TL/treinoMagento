<?php

namespace Interfaces\InterfaceModule\Model\Product;

class Shirt
{
    protected $typeText;
    protected $typeNumber;
    protected $typeArray = [];
    protected $typeInitParameter;
    const MY_CONSTANT = 'MY CUSTOM CONSTANT';


    public function __construct(
        $typeText = 'my string', $typeNumber = 2010,
        $typeArray = ['customName'=> 'Abraao Marques','customColor' => 'Orange'],$typeInitParameter = self::MY_CONSTANT)
    {
        $this->typeText = $typeText;
        $this->typeNumber = $typeNumber;
        $this->typeArray = $typeArray;
        $this->typeInitParameter = $typeInitParameter;
    }
}