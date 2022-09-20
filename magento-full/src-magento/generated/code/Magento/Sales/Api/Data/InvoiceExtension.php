<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\InvoiceInterface
 */
class InvoiceExtension extends \Magento\Framework\Api\AbstractSimpleObject implements InvoiceExtensionInterface
{
    /**
     * @return \Magento\Sales\Api\Data\OrderAddressInterface|null
     */
    public function getVertexTaxCalculationShippingAddress()
    {
        return $this->_get('vertex_tax_calculation_shipping_address');
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $vertexTaxCalculationShippingAddress
     * @return $this
     */
    public function setVertexTaxCalculationShippingAddress(\Magento\Sales\Api\Data\OrderAddressInterface $vertexTaxCalculationShippingAddress)
    {
        $this->setData('vertex_tax_calculation_shipping_address', $vertexTaxCalculationShippingAddress);
        return $this;
    }

    /**
     * @return \Magento\Sales\Api\Data\OrderAddressInterface|null
     */
    public function getVertexTaxCalculationBillingAddress()
    {
        return $this->_get('vertex_tax_calculation_billing_address');
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $vertexTaxCalculationBillingAddress
     * @return $this
     */
    public function setVertexTaxCalculationBillingAddress(\Magento\Sales\Api\Data\OrderAddressInterface $vertexTaxCalculationBillingAddress)
    {
        $this->setData('vertex_tax_calculation_billing_address', $vertexTaxCalculationBillingAddress);
        return $this;
    }

    /**
     * @return \Magento\Sales\Api\Data\OrderInterface|null
     */
    public function getVertexTaxCalculationOrder()
    {
        return $this->_get('vertex_tax_calculation_order');
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $vertexTaxCalculationOrder
     * @return $this
     */
    public function setVertexTaxCalculationOrder(\Magento\Sales\Api\Data\OrderInterface $vertexTaxCalculationOrder)
    {
        $this->setData('vertex_tax_calculation_order', $vertexTaxCalculationOrder);
        return $this;
    }
}
