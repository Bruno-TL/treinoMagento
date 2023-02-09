<?php

namespace Interfaces\InterfaceModule\Model;

use Interfaces\InterfaceModule\Api\NameInterface;

class SubName implements NameInterface
{
    protected $sobreName;

    public function __construct(NameInterface $sobreName)
    {
        $this->sobreName = $sobreName;
    }
    public function getName($sobreName = 'Anakin')
    {
        return $this->sobreName = $sobreName;
    }
}