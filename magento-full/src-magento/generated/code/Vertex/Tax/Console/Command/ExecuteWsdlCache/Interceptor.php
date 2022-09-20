<?php
namespace Vertex\Tax\Console\Command\ExecuteWsdlCache;

/**
 * Interceptor class for @see \Vertex\Tax\Console\Command\ExecuteWsdlCache
 */
class Interceptor extends \Vertex\Tax\Console\Command\ExecuteWsdlCache implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Vertex\Tax\Model\WsdlCache $wsdlCache, ?string $name = null)
    {
        $this->___init();
        parent::__construct($wsdlCache, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
