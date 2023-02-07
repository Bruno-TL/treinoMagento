<?php

namespace Interfaces\InterfaceModule\Model;

use Interfaces\InterfaceModule\Api\NameInterface;

class SubName implements NameInterface
{
    public function getName()
    {
        return 'Anakin';
    }
}