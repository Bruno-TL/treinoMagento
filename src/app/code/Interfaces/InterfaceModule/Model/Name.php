<?php
namespace Interfaces\InterfaceModule\Model;

use Interfaces\InterfaModule\Api\NameInterface;
class Name implements NameInterface
{
    public function getName()
    {
        return 'Darth Vader';
    }
}