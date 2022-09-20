<?php
namespace Magento\CatalogInventory\Model\Source\Stock;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Source\Stock
 */
class Interceptor extends \Magento\CatalogInventory\Model\Source\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function addValueSortToCollection($collection, $dir = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addValueSortToCollection');
        return $pluginInfo ? $this->___callPlugins('addValueSortToCollection', func_get_args(), $pluginInfo) : parent::addValueSortToCollection($collection, $dir);
    }
}
