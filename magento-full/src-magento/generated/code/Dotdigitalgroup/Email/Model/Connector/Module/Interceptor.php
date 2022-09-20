<?php
namespace Dotdigitalgroup\Email\Model\Connector\Module;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Model\Connector\Module
 */
class Interceptor extends \Dotdigitalgroup\Email\Model\Connector\Module implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Module\ModuleListInterface $moduleListInterface)
    {
        $this->___init();
        parent::__construct($moduleListInterface);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchActiveModules(array $modules = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchActiveModules');
        return $pluginInfo ? $this->___callPlugins('fetchActiveModules', func_get_args(), $pluginInfo) : parent::fetchActiveModules($modules);
    }
}
