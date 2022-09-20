<?php
namespace Klarna\Core\Controller\Adminhtml\Index\Send;

/**
 * Interceptor class for @see \Klarna\Core\Controller\Adminhtml\Index\Send
 */
class Interceptor extends \Klarna\Core\Controller\Adminhtml\Index\Send implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\RequestInterface $request, \Klarna\Core\Model\Support\Email $email)
    {
        $this->___init();
        parent::__construct($context, $request, $email);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\Result\Redirect
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
