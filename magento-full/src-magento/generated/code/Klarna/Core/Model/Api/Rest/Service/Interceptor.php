<?php
namespace Klarna\Core\Model\Api\Rest\Service;

/**
 * Interceptor class for @see \Klarna\Core\Model\Api\Rest\Service
 */
class Interceptor extends \Klarna\Core\Model\Api\Rest\Service implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $log, ?\Klarna\Core\Logger\Api\Logger $apiLogger = null, ?\Klarna\Core\Logger\Api\Container $loggerContainer = null)
    {
        $this->___init();
        parent::__construct($log, $apiLogger, $loggerContainer);
    }

    /**
     * {@inheritdoc}
     */
    public function setUserAgent($product, $version, $mageInfo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUserAgent');
        return $pluginInfo ? $this->___callPlugins('setUserAgent', func_get_args(), $pluginInfo) : parent::setUserAgent($product, $version, $mageInfo);
    }
}
