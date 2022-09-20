<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceInterface
 */
interface InvoiceExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Sales\Api\Data\OrderAddressInterface|null
     */
    public function getVertexTaxCalculationShippingAddress();

    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $vertexTaxCalculationShippingAddress
     * @return $this
     */
    public function setVertexTaxCalculationShippingAddress(\Magento\Sales\Api\Data\OrderAddressInterface $vertexTaxCalculationShippingAddress);

    /**
     * @return \Magento\Sales\Api\Data\OrderAddressInterface|null
     */
    public function getVertexTaxCalculationBillingAddress();

    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $vertexTaxCalculationBillingAddress
     * @return $this
     */
    public function setVertexTaxCalculationBillingAddress(\Magento\Sales\Api\Data\OrderAddressInterface $vertexTaxCalculationBillingAddress);

    /**
     * @return \Magento\Sales\Api\Data\OrderInterface|null
     */
    public function getVertexTaxCalculationOrder();

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $vertexTaxCalculationOrder
     * @return $this
     */
    public function setVertexTaxCalculationOrder(\Magento\Sales\Api\Data\OrderInterface $vertexTaxCalculationOrder);
}
