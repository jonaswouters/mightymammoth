<?php

namespace MightyMammoth\Entity\Invoice;

/**
 * Detail
 */
class Detail
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $quantityType;

    /**
     * @var integer
     */
    private $amount;

    /**
     * @var integer
     */
    private $vat;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MightyMammoth\Entity\Invoice
     */
    private $invoice;


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Detail
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Detail
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantityType
     *
     * @param string $quantityType
     *
     * @return Detail
     */
    public function setQuantityType($quantityType)
    {
        $this->quantityType = $quantityType;

        return $this;
    }

    /**
     * Get quantityType
     *
     * @return string
     */
    public function getQuantityType()
    {
        return $this->quantityType;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Detail
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set vat
     *
     * @param integer $vat
     *
     * @return Detail
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return integer
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set invoice
     *
     * @param \MightyMammoth\Entity\Invoice $invoice
     *
     * @return Detail
     */
    public function setInvoice(\MightyMammoth\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \MightyMammoth\Entity\Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }
}
