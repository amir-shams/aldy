<?php
namespace Dotdigitalgroup\EmailGraphQl\Model\Resolver\TrackingData;

/**
 * Interceptor class for @see \Dotdigitalgroup\EmailGraphQl\Model\Resolver\TrackingData
 */
class Interceptor extends \Dotdigitalgroup\EmailGraphQl\Model\Resolver\TrackingData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Email\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($helper);
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
