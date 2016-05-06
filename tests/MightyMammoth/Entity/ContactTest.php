<?php declare(strict_types = 1);

namespace MightyMammoth\Entity;

class ContactTest extends \PHPUnit_Framework_TestCase
{
    public function testCreation()
    {
        $contact = new Contact();

        $this->assertInstanceOf(Contact::class, $contact);
    }

    public function testId()
    {
        $contact = new Contact();

        $this->expectException('\TypeError');
        $contact->getId();
    }

    public function testDisplayName()
    {
        $contact = new Contact();

        $displayName = 'DisplayName';
        $contact->setDisplayName('DisplayName');
        $this->assertInstanceOf(Contact::class, $contact->setDisplayName($displayName));
        $this->assertEquals($displayName, $contact->getDisplayName());
    }

    public function testCompanyName()
    {
        $contact = new Contact();

        $companyName = 'CompanyName';
        $this->assertInstanceOf(Contact::class, $contact->setCompanyName($companyName));
        $this->assertEquals($companyName, $contact->getCompanyName());
    }

    public function testFirstName()
    {
        $contact = new Contact();

        $firstName = 'FirstName';
        $this->assertInstanceOf(Contact::class, $contact->setFirstName($firstName));
        $this->assertEquals($firstName, $contact->getFirstName());
    }

    public function testLastName()
    {
        $contact = new Contact();

        $lastName = 'LastName';
        $this->assertInstanceOf(Contact::class, $contact->setLastName($lastName));
        $this->assertEquals($lastName, $contact->getLastName());
    }

    public function testEmail()
    {
        $contact = new Contact();

        $email = 'Email';
        $this->assertInstanceOf(Contact::class, $contact->setEmail($email));
        $this->assertEquals($email, $contact->getEmail());
    }

    public function testPhoneNumber()
    {
        $contact = new Contact();

        $phoneNumber = 'PhoneNumber';
        $this->assertInstanceOf(Contact::class, $contact->setPhoneNumber($phoneNumber));
        $this->assertEquals($phoneNumber, $contact->getPhoneNumber());
    }

    public function testVatNumber()
    {
        $contact = new Contact();

        $vatNumber = 'VatNumber';
        $this->assertInstanceOf(Contact::class, $contact->setVatNumber($vatNumber));
        $this->assertEquals($vatNumber, $contact->getVatNumber());
    }

    public function testCreatedAt()
    {
        $contact = new Contact();

        $createdAt = new \DateTime();
        $this->assertInstanceOf(Contact::class, $contact->setCreatedAt($createdAt));
        $this->assertEquals($createdAt, $contact->getCreatedAt());
    }
}
