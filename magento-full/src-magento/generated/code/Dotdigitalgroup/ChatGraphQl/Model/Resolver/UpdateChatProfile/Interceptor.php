<?php
namespace Dotdigitalgroup\ChatGraphQl\Model\Resolver\UpdateChatProfile;

/**
 * Interceptor class for @see \Dotdigitalgroup\ChatGraphQl\Model\Resolver\UpdateChatProfile
 */
class Interceptor extends \Dotdigitalgroup\ChatGraphQl\Model\Resolver\UpdateChatProfile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Chat\Model\Api\Requests\UpdateProfile $updateProfile)
    {
        $this->___init();
        parent::__construct($updateProfile);
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
