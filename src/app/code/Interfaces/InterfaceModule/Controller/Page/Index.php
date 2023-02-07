<?php

namespace Bruno\NewsLetterModal\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Interfaces\InterfaceModule\Api\NameInterface;

class Index extends Action
{
    protected $name;

    public function __construct(Context $context, NameInterface $name)
    {
        parent::__construct ($context);
        $this->name =$name;

    }

    public function execute()
    {
        echo "{$this->name->getName()}";
    }
}