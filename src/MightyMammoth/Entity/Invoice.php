<?php

namespace MightyMammoth\Entity;

/**
 * Invoice
 */
class Invoice
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $invoiceDate;

    /**
     * @var \DateTime
     */
    private $dueDate;

    /**
     * @var \DateTime
     */
    private $paidDate;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MightyMammoth\Entity\Organization
     */
    private $organization;

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Invoice
     */
    public function setNumber($number) : Invoice
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set createdAt
     *
     * @param \DateTimeInterface $createdAt
     *
     * @return Invoice
     */
    public function setCreatedAt($createdAt) : Invoice
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTimeInterface $updatedAt
     *
     * @return Invoice
     */
    public function setUpdatedAt($updatedAt) : Invoice
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set invoiceDate
     *
     * @param \DateTimeInterface $invoiceDate
     *
     * @return Invoice
     */
    public function setInvoiceDate(\DateTimeInterface $invoiceDate) : Invoice
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate
     *
     * @return \DateTimeInterface
     */
    public function getInvoiceDate() : \DateTimeInterface
    {
        return $this->invoiceDate;
    }

    /**
     * Set dueDate
     *
     * @param \DateTimeInterface $dueDate
     *
     * @return Invoice
     */
    public function setDueDate($dueDate) : Invoice
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set paidDate
     *
     * @param \DateTimeInterface $paidDate
     *
     * @return Invoice
     */
    public function setPaidDate($paidDate) : Invoice
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * Get paidDate
     *
     * @return \DateTime|null
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Set organization
     *
     * @param \MightyMammoth\Entity\Organization $organization
     *
     * @return Invoice
     */
    public function setOrganization(\MightyMammoth\Entity\Organization $organization = null) : Invoice
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \MightyMammoth\Entity\Organization|null
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}

