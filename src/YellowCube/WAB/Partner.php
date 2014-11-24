<?php

namespace YellowCube\WAB;

class Partner
{
    /**
     *
     * @var string $PartnerType
     */
    protected $PartnerType = null;
    /**
     *
     * @var string $PartnerNo
     */
    protected $PartnerNo = null;
    /**
     *
     * @var string $PartnerReference
     */
    protected $PartnerReference = null;
    /**
     *
     * @var string $Title
     */
    protected $Title = null;
    /**
     *
     * @var string $Name1
     */
    protected $Name1 = null;
    /**
     *
     * @var string $Name2
     */
    protected $Name2 = null;
    /**
     *
     * @var string $Name3
     */
    protected $Name3 = null;
    /**
     *
     * @var string $Name4
     */
    protected $Name4 = null;
    /**
     *
     * @var string $Street
     */
    protected $Street = null;
    /**
     *
     * @var string $CountryCode
     */
    protected $CountryCode = null;
    /**
     *
     * @var string $ZIPCode
     */
    protected $ZIPCode = null;
    /**
     *
     * @var string $City
     */
    protected $City = null;
    /**
     *
     * @var string $POBox
     */
    protected $POBox = null;
    /**
     *
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;
    /**
     *
     * @var string $MobileNo
     */
    protected $MobileNo = null;
    /**
     *
     * @var string $SMSAvisMobNo
     */
    protected $SMSAvisMobNo = null;
    /**
     *
     * @var string $FaxNo
     */
    protected $FaxNo = null;
    /**
     *
     * @var string $Email
     */
    protected $Email = null;
    /**
     *
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     *
     * @return string
     */
    public function getPartnerType()
    {
        return $this->PartnerType;
    }

    /**
     *
     * @param string $PartnerType
     */
    public function setPartnerType($PartnerType)
    {
        $this->PartnerType = $PartnerType;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPartnerNo()
    {
        return $this->PartnerNo;
    }

    /**
     *
     * @param string $PartnerNo
     */
    public function setPartnerNo($PartnerNo)
    {
        $this->PartnerNo = $PartnerNo;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPartnerReference()
    {
        return $this->PartnerReference;
    }

    /**
     *
     * @param string $PartnerReference
     */
    public function setPartnerReference($PartnerReference)
    {
        $this->PartnerReference = $PartnerReference;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     *
     * @param string $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getName1()
    {
        return $this->Name1;
    }

    /**
     *
     * @param string $Name1
     */
    public function setName1($Name1)
    {
        $this->Name1 = $Name1;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getName2()
    {
        return $this->Name2;
    }

    /**
     *
     * @param string $Name2
     */
    public function setName2($Name2)
    {
        $this->Name2 = $Name2;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getName3()
    {
        return $this->Name3;
    }

    /**
     *
     * @param string $Name3
     */
    public function setName3($Name3)
    {
        $this->Name3 = $Name3;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getName4()
    {
        return $this->Name4;
    }

    /**
     *
     * @param string $Name4
     */
    public function setName4($Name4)
    {
        $this->Name4 = $Name4;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     *
     * @param string $Street
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     *
     * @param string $CountryCode
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getZIPCode()
    {
        return $this->ZIPCode;
    }

    /**
     *
     * @param string $ZIPCode
     */
    public function setZIPCode($ZIPCode)
    {
        $this->ZIPCode = $ZIPCode;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     *
     * @param string $City
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPOBox()
    {
        return $this->POBox;
    }

    /**
     *
     * @param string $POBox
     */
    public function setPOBox($POBox)
    {
        $this->POBox = $POBox;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->PhoneNo;
    }

    /**
     *
     * @param string $PhoneNo
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getMobileNo()
    {
        return $this->MobileNo;
    }

    /**
     *
     * @param string $MobileNo
     */
    public function setMobileNo($MobileNo)
    {
        $this->MobileNo = $MobileNo;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getSMSAvisMobNo()
    {
        return $this->SMSAvisMobNo;
    }

    /**
     *
     * @param string $SMSAvisMobNo
     */
    public function setSMSAvisMobNo($SMSAvisMobNo)
    {
        $this->SMSAvisMobNo = $SMSAvisMobNo;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getFaxNo()
    {
        return $this->FaxNo;
    }

    /**
     *
     * @param string $FaxNo
     */
    public function setFaxNo($FaxNo)
    {
        $this->FaxNo = $FaxNo;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     *
     * @param string $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     *
     * @param string $LanguageCode
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }
}
