<?php
namespace Dotdigitalgroup\ChatGraphQl\Model\Resolver\ChatData;

/**
 * Interceptor class for @see \Dotdigitalgroup\ChatGraphQl\Model\Resolver\ChatData
 */
class Interceptor extends \Dotdigitalgroup\ChatGraphQl\Model\Resolver\ChatData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Chat\Model\Config $config, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($config, $scopeConfig);
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
