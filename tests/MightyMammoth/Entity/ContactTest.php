<?php declare(strict_types = 1);

namespace MightyMammoth\Entity;

/**
 * Class ContactTest
 *
 * @package MightyMammoth\Entity
 */
class ContactTest extends \PHPUnit_Framework_TestCase
{
    public function testCreation()
    {
        $entity = new Contact();

        $this->assertInstanceOf(Contact::class, $entity);
    }

    public function testId()
    {
        $entity = new Contact();

        $this->expectException('\TypeError');
        $entity->getId();
    }
    
    public function testDisplayName()
    {
        $entity = new Contact();

        $propertyValue = 'DisplayName';
        $entity->setDisplayName($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setDisplayName($propertyValue));
        $this->assertEquals($propertyValue, $entity->getDisplayName());
    }

    public function testFirstName()
    {
        $entity = new Contact();

        $propertyValue = 'FirstName';
        $entity->setFirstName($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setFirstName($propertyValue));
        $this->assertEquals($propertyValue, $entity->getFirstName());
    }

    public function testLastName()
    {
        $entity = new Contact();

        $propertyValue = 'LastName';
        $entity->setLastName($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setLastName($propertyValue));
        $this->assertEquals($propertyValue, $entity->getLastName());
    }

    public function testCompanyName()
    {
        $entity = new Contact();

        $propertyValue = 'CompanyName';
        $entity->setCompanyName($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setCompanyName($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCompanyName());
    }

    public function testAddress()
    {
        $entity = new Contact();

        $propertyValue = 'Address';
        $entity->setAddress($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setAddress($propertyValue));
        $this->assertEquals($propertyValue, $entity->getAddress());
    }

    public function testPostalCode()
    {
        $entity = new Contact();

        $propertyValue = 'PostalCode';
        $entity->setPostalCode($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setPostalCode($propertyValue));
        $this->assertEquals($propertyValue, $entity->getPostalCode());
    }

    public function testCity()
    {
        $entity = new Contact();

        $propertyValue = 'City';
        $entity->setCity($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setCity($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCity());
    }

    public function testCountry()
    {
        $entity = new Contact();

        $propertyValue = 'Country';
        $entity->setCountry($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setCountry($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCountry());
    }

    public function testEmail()
    {
        $entity = new Contact();

        $propertyValue = 'Email';
        $entity->setEmail($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setEmail($propertyValue));
        $this->assertEquals($propertyValue, $entity->getEmail());
    }

    public function testPhoneNumber()
    {
        $entity = new Contact();

        $propertyValue = 'PhoneNumber';
        $entity->setPhoneNumber($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setPhoneNumber($propertyValue));
        $this->assertEquals($propertyValue, $entity->getPhoneNumber());
    }

    public function testVatNumber()
    {
        $entity = new Contact();

        $propertyValue = 'VatNumber';
        $entity->setVatNumber($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setVatNumber($propertyValue));
        $this->assertEquals($propertyValue, $entity->getVatNumber());
    }
        
    public function testCreatedAt()
    {
        $entity = new Contact();

        $propertyValue = new \DateTime();
        $entity->setCreatedAt($propertyValue);
        $this->assertInstanceOf(Contact::class, $entity->setCreatedAt($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCreatedAt());
    }
}
