<?php
namespace Dotdigitalgroup\EmailGraphQl\Model\Resolver\EasyEmailCaptureCheckout;

/**
 * Interceptor class for @see \Dotdigitalgroup\EmailGraphQl\Model\Resolver\EasyEmailCaptureCheckout
 */
class Interceptor extends \Dotdigitalgroup\EmailGraphQl\Model\Resolver\EasyEmailCaptureCheckout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($scopeConfig, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
