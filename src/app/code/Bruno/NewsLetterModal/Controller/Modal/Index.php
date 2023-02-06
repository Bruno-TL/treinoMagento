<?php

namespace Bruno\NewsLetterModal\Controller\Modal;

use \Bruno\NewsLetterModal\Helper\Data;

// use Magento\Framework\App\Action\Action;
// use Magento\Framework\App\ResponseInterface;
class Index
{
    protected $_helper;

    public function __construct(Context $context,Data $helper)
    {
        parent::__construct($context);
        $this->_helper = $helper;
    }
    public function execute()
    {
        return $this->_helper->getModalTitle();
    }
}