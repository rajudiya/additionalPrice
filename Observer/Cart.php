<?php
namespace O2script\AdditionalPrice\Observer;
 
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;
 
class Cart implements ObserverInterface
{
    public function execute(Observer $observer)
    {
    $item = $observer->getEvent()->getData('quote_item');
    $product = $observer->getEvent()->getData('product');
    $itemProId = $item->getProduct()->getId();
    $optionId = $item->getProduct()->getData('addPrice');
    $custom_price = $product->getPrice() + $optionId;
    $item->setCustomPrice($custom_price);
    $item->setOriginalCustomPrice($custom_price);
    $item->getProduct()->setIsSuperMode(true);
    return $this;
    }
}

?>