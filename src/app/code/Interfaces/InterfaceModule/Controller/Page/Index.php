<?php

namespace Interfaces\InterfaceModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Interfaces\InterfaceModule\Api\NameInterface;
use Interfaces\InterfaceModule\Model\Product\Shoe;

class Index extends Action
{
    protected $name;
    protected $product;

    public function __construct(Context $context, NameInterface $name, Shoe $product)
    {
        parent::__construct ($context);
        $this->name =$name;
        $this->product = $product;
    }

    public function execute()
    {
        echo $this->product->getShoe() . " " . $this->name->getName() ;
    }
}
