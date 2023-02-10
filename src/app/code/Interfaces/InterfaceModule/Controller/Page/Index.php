<?php

namespace Interfaces\InterfaceModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Interfaces\InterfaceModule\Api\NameInterface;
use Interfaces\InterfaceModule\Model\Product\Shoe;
use Interfaces\IntefaceModule\Model\Product\Shirt;

class Index extends Action
{
    protected $name;
    protected $product;
    protected $shirt;

    public function __construct(Context $context, NameInterface $name, Shoe $product, Shirt $shirt)
    {
        parent::__construct ($context);
        $this->name =$name;
        $this->product = $product;
        $this->shirt = $shirt;

    }

    public function execute()
    {
//        echo $this->product->getShoe() . " " . $this->name->getName() . " " . $this->shirt;

//        Fazendo o plugin ser executado
        $objectManager = \Magento\Framewokr\App\ObjectManager::getInstancer();
        $product = $objectManager->create('Magento\Catalog\Model\Product')->load(2);
        $product->setName('Samsung Galaxy');
        $productName = $product->getName();

    }
}
