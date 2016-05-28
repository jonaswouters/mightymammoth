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

    public function testFirstName()
    {
        $entity = new Invoice();

        $propertyValue = 'FirstName';
        $entity->setFirstName($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setFirstName($propertyValue));
        $this->assertEquals($propertyValue, $entity->getFirstName());
    }

    public function testLastName()
    {
        $entity = new Invoice();

        $propertyValue = 'LastName';
        $entity->setLastName($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setLastName($propertyValue));
        $this->assertEquals($propertyValue, $entity->getLastName());
    }

    public function testCompanyName()
    {
        $entity = new Invoice();

        $propertyValue = 'CompanyName';
        $entity->setCompanyName($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setCompanyName($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCompanyName());
    }

    public function testVatNumber()
    {
        $entity = new Invoice();

        $propertyValue = 'VatNumber';
        $entity->setVatNumber($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setVatNumber($propertyValue));
        $this->assertEquals($propertyValue, $entity->getVatNumber());
    }

    public function testAddress()
    {
        $entity = new Invoice();

        $propertyValue = 'Address';
        $entity->setAddress($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setAddress($propertyValue));
        $this->assertEquals($propertyValue, $entity->getAddress());
    }

    public function testPostalCode()
    {
        $entity = new Invoice();

        $propertyValue = 'PostalCode';
        $entity->setPostalCode($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setPostalCode($propertyValue));
        $this->assertEquals($propertyValue, $entity->getPostalCode());
    }

    public function testCity()
    {
        $entity = new Invoice();

        $propertyValue = 'City';
        $entity->setCity($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setCity($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCity());
    }

    public function testCountry()
    {
        $entity = new Invoice();

        $propertyValue = 'Country';
        $entity->setCountry($propertyValue);
        $this->assertInstanceOf(Invoice::class, $entity->setCountry($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCountry());
    }
}
