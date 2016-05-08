<?php declare(strict_types = 1);

namespace MightyMammoth\Entity;

/**
 * Class InvoiceTest
 *
 * @package MightyMammoth\Entity
 */
class InvoiceTest extends \PHPUnit_Framework_TestCase
{
    public function testCreation()
    {
        $entity = new Invoice();

        $this->assertInstanceOf(Invoice::class, $entity);
    }

    public function testId()
    {
        $entity = new Invoice();

        $this->expectException('\TypeError');
        $entity->getId();
    }
    
    public function testNumber()
    {
        $entity = new Invoice();

        $propertyValue = 'Number';
        $entity->setNumber($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setNumber($propertyValue));
        $this->assertEquals($propertyValue, $entity->getNumber());
    }
        
    public function testCreatedAt()
    {
        $entity = new Invoice();

        $propertyValue = new \DateTime();
        $entity->setCreatedAt($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setCreatedAt($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCreatedAt());
    }
        
    public function testUpdatedAt()
    {
        $entity = new Invoice();

        $propertyValue = new \DateTime();
        $entity->setUpdatedAt($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setUpdatedAt($propertyValue));
        $this->assertEquals($propertyValue, $entity->getUpdatedAt());
    }

    public function testInvoiceDate()
    {
        $entity = new Invoice();

        $propertyValue = new \DateTime();
        $entity->setInvoiceDate($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setInvoiceDate($propertyValue));
        $this->assertEquals($propertyValue, $entity->getInvoiceDate());
    }

    public function testDueDate()
    {
        $entity = new Invoice();

        $propertyValue = new \DateTime();
        $entity->setDueDate($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setDueDate($propertyValue));
        $this->assertEquals($propertyValue, $entity->getDueDate());
    }

    public function testPaidDate()
    {
        $entity = new Invoice();

        $propertyValue = new \DateTime();
        $entity->setPaidDate($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setPaidDate($propertyValue));
        $this->assertEquals($propertyValue, $entity->getPaidDate());
    }

    public function testOrganization()
    {
        $entity = new Invoice();

        $propertyValue = new Organization();
        $entity->setOrganization($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setOrganization($propertyValue));
        $this->assertEquals($propertyValue, $entity->getOrganization());
    }
}
