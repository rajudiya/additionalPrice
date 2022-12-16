<?php
namespace O2script\AdditionalPrice\Observer;
 
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;
 
class Cart implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        //get the item just added to cart
        $item = $observer->getEvent()->getData('quote_item');
        echo $product = $observer->getEvent()->getData('product');
        // set your custom price
        $price = 300;
        $item->setCustomPrice($price);
        $item->setOriginalCustomPrice($price);
        $item->getProduct()->setIsSuperMode(true);

        /* add your Logic here*/
    }
}

?>