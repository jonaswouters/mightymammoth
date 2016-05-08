<?php

namespace MightyMammoth\Entity;

/**
 * Organization
 */
class Organization
{
    /**
     * @var string
     */
    private $displayName;

    /**
     * @var \DateTimeInterface
     */
    private $createdAt;

    /**
     * @var \DateTimeInterface
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set displayName
     *
     * @param string $displayName
     *
     * @return Organization
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }

    /**
     * Set createdAt
     *
     * @param \DateTimeInterface $createdAt
     *
     * @return Organization
     */
    public function setCreatedAt(\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTimeInterface|null
     */
    public function getCreatedAt() : \DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTimeInterface $updatedAt
     *
     * @return Organization
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTimeInterface|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
}

