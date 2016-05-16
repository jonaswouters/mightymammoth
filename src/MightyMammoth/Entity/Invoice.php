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
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $vatNumber;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $details;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->details = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Invoice
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Invoice
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Invoice
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set vatNumber
     *
     * @param string $vatNumber
     *
     * @return Invoice
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;

        return $this;
    }

    /**
     * Get vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Invoice
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Invoice
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Invoice
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Invoice
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add detail
     *
     * @param \MightyMammoth\Entity\Invoice\Detail $detail
     *
     * @return Invoice
     */
    public function addDetail(\MightyMammoth\Entity\Invoice\Detail $detail)
    {
        $this->details[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \MightyMammoth\Entity\Invoice\Detail $detail
     */
    public function removeDetail(\MightyMammoth\Entity\Invoice\Detail $detail)
    {
        $this->details->removeElement($detail);
    }

    /**
     * Get details
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetails()
    {
        return $this->details;
    }
}
