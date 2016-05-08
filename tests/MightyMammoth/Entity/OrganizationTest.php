<?php declare(strict_types = 1);

namespace MightyMammoth\Entity;

/**
 * Class OrganizationTest
 *
 * @package MightyMammoth\Entity
 */
class OrganizationTest extends \PHPUnit_Framework_TestCase
{
    public function testCreation()
    {
        $entity = new Organization();

        $this->assertInstanceOf(Organization::class, $entity);
    }

    public function testId()
    {
        $entity = new Organization();

        $this->expectException('\TypeError');
        $entity->getId();
    }
    
    public function testDisplayName()
    {
        $entity = new Organization();

        $propertyValue = 'DisplayName';
        $entity->setDisplayName($propertyValue);
        $this->assertInstanceOf(Organization::class, $entity->setDisplayName($propertyValue));
        $this->assertEquals($propertyValue, $entity->getDisplayName());
    }
        
    public function testCreatedAt()
    {
        $entity = new Organization();

        $propertyValue = new \DateTime();
        $entity->setCreatedAt($propertyValue);
        $this->assertInstanceOf(Organization::class, $entity->setCreatedAt($propertyValue));
        $this->assertEquals($propertyValue, $entity->getCreatedAt());
    }
        
    public function testUpdatedAt()
    {
        $entity = new Organization();

        $propertyValue = new \DateTime();
        $entity->setUpdatedAt($propertyValue);
        $this->assertInstanceOf(Organization::class, $entity->setUpdatedAt($propertyValue));
        $this->assertEquals($propertyValue, $entity->getUpdatedAt());
    }
}
