<?php
namespace Klarna\Core\Helper\VersionInfo;

/**
 * Interceptor class for @see \Klarna\Core\Helper\VersionInfo
 */
class Interceptor extends \Klarna\Core\Helper\VersionInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ProductMetadataInterface $productMetadata, \Magento\Framework\App\State $appState, \Magento\Framework\Module\ResourceInterface $resource)
    {
        $this->___init();
        parent::__construct($productMetadata, $appState, $resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleVersionString(string $version, string $caller) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleVersionString');
        return $pluginInfo ? $this->___callPlugins('getModuleVersionString', func_get_args(), $pluginInfo) : parent::getModuleVersionString($version, $caller);
    }
}
