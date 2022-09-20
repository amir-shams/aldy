<?php
namespace Dotdigitalgroup\EmailGraphQl\Model\Resolver\UpdateQuoteEmail;

/**
 * Interceptor class for @see \Dotdigitalgroup\EmailGraphQl\Model\Resolver\UpdateQuoteEmail
 */
class Interceptor extends \Dotdigitalgroup\EmailGraphQl\Model\Resolver\UpdateQuoteEmail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Validator\EmailAddress $emailValidator, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\Quote\Model\MaskedQuoteIdToQuoteIdInterface $maskedQuoteIdToQuoteId)
    {
        $this->___init();
        parent::__construct($emailValidator, $cartRepository, $maskedQuoteIdToQuoteId);
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
