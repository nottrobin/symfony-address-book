<?php

namespace Robin\AddressBookBundle\Entity;

class Contact
{
    public $firstName;
    public $lastName;
    public $addressLineOne;
    public $addressLineTwo;
    public $city;
    public $postcode;
    public $homeNumber;
    public $mobileNumber;
    public $id;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Contact
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
     * @return Contact
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
     * Set addressLineOne
     *
     * @param string $addressLineOne
     * @return Contact
     */
    public function setAddressLineOne($addressLineOne)
    {
        $this->addressLineOne = $addressLineOne;
    
        return $this;
    }

    /**
     * Get addressLineOne
     *
     * @return string 
     */
    public function getAddressLineOne()
    {
        return $this->addressLineOne;
    }

    /**
     * Set addressLineTwo
     *
     * @param string $addressLineTwo
     * @return Contact
     */
    public function setAddressLineTwo($addressLineTwo)
    {
        $this->addressLineTwo = $addressLineTwo;
    
        return $this;
    }

    /**
     * Get addressLineTwo
     *
     * @return string 
     */
    public function getAddressLineTwo()
    {
        return $this->addressLineTwo;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Contact
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
     * Set postcode
     *
     * @param string $postcode
     * @return Contact
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    
        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set homeNumber
     *
     * @param string $homeNumber
     * @return Contact
     */
    public function setHomeNumber($homeNumber)
    {
        $this->homeNumber = $homeNumber;
    
        return $this;
    }

    /**
     * Get homeNumber
     *
     * @return string 
     */
    public function getHomeNumber()
    {
        return $this->homeNumber;
    }

    /**
     * Set mobileNumber
     *
     * @param string $mobileNumber
     * @return Contact
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    
        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return string 
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }
}