<?php
namespace Magento\SalesRule\Model\Quote\Discount;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Quote\Discount
 */
class Interceptor extends \Magento\SalesRule\Model\Quote\Discount implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\SalesRule\Model\Validator $validator, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, ?\Magento\SalesRule\Api\Data\RuleDiscountInterfaceFactory $discountInterfaceFactory = null, ?\Magento\SalesRule\Api\Data\DiscountDataInterfaceFactory $discountDataInterfaceFactory = null)
    {
        $this->___init();
        parent::__construct($eventManager, $storeManager, $validator, $priceCurrency, $discountInterfaceFactory, $discountDataInterfaceFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function collect(\Magento\Quote\Model\Quote $quote, \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment, \Magento\Quote\Model\Quote\Address\Total $total)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collect');
        return $pluginInfo ? $this->___callPlugins('collect', func_get_args(), $pluginInfo) : parent::collect($quote, $shippingAssignment, $total);
    }
}
