<?php
namespace Klarna\Core\Controller\Adminhtml\Index\Support;

/**
 * Interceptor class for @see \Klarna\Core\Controller\Adminhtml\Index\Support
 */
class Interceptor extends \Klarna\Core\Controller\Adminhtml\Index\Support implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($resultPageFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\View\Result\Page
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
