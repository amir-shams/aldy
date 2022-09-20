<?php
namespace Klarna\Core\Controller\Adminhtml\Index\Upload;

/**
 * Interceptor class for @see \Klarna\Core\Controller\Adminhtml\Index\Upload
 */
class Interceptor extends \Klarna\Core\Controller\Adminhtml\Index\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Klarna\Core\Model\Support\Uploader $uploader)
    {
        $this->___init();
        parent::__construct($resultJsonFactory, $uploader);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
