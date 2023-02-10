<?php

namespace Interfaces\InterfaceModule\Plugin;
class PlugiOne
{
//    Plugin before => nome da function "before" no inicio obgatorio
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        return "Plugin Before". $name;
    }

//    Plugin after => nome da function  "after" no inicio obgatorio
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result . "I Plugin after";
    }

//    Plugin around
    public function aroundGetName(\Magento\Catalog\Model\Product $subject, $proceed)
    {
        echo "--- Before Proceed" . "<br/>";
        $name = $proceed();
        echo "--- After Proceed"."<br/>";
        return $name;
    }
}
