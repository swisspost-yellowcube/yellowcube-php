<?php

namespace YellowCube;

class PartnerCustom
{

  /**
   * 
   * @var PartnerType $PartnerType
   */
  protected $PartnerType = null;

  /**
   * 
   * @var PartnerNo $PartnerNo
   */
  protected $PartnerNo = null;

  /**
   * 
   * @var PartnerReference $PartnerReference
   */
  protected $PartnerReference = null;

  /**
   * 
   * @var Title $Title
   */
  protected $Title = null;

  /**
   * 
   * @var Name1 $Name1
   */
  protected $Name1 = null;

  /**
   * 
   * @var Name2 $Name2
   */
  protected $Name2 = null;

  /**
   * 
   * @var Name3 $Name3
   */
  protected $Name3 = null;

  /**
   * 
   * @var Name4 $Name4
   */
  protected $Name4 = null;

  /**
   * 
   * @var Street $Street
   */
  protected $Street = null;

  /**
   * 
   * @var CountryCode $CountryCode
   */
  protected $CountryCode = null;

  /**
   * 
   * @var ZIPCode $ZIPCode
   */
  protected $ZIPCode = null;

  /**
   * 
   * @var City $City
   */
  protected $City = null;

  /**
   * 
   * @var POBox $POBox
   */
  protected $POBox = null;

  /**
   * 
   * @var PhoneNo $PhoneNo
   */
  protected $PhoneNo = null;

  /**
   * 
   * @var MobileNo $MobileNo
   */
  protected $MobileNo = null;

  /**
   * 
   * @var SMSAvisMobNo $SMSAvisMobNo
   */
  protected $SMSAvisMobNo = null;

  /**
   * 
   * @var FaxNo $FaxNo
   */
  protected $FaxNo = null;

  /**
   * 
   * @var Email $Email
   */
  protected $Email = null;

  /**
   * 
   * @var LanguageCode $LanguageCode
   */
  protected $LanguageCode = null;

  /**
   * 
   * @param PartnerType $PartnerType
   * @param PartnerNo $PartnerNo
   * @param PartnerReference $PartnerReference
   * @param Title $Title
   * @param Name1 $Name1
   * @param Name2 $Name2
   * @param Name3 $Name3
   * @param Name4 $Name4
   * @param Street $Street
   * @param CountryCode $CountryCode
   * @param ZIPCode $ZIPCode
   * @param City $City
   * @param POBox $POBox
   * @param PhoneNo $PhoneNo
   * @param MobileNo $MobileNo
   * @param SMSAvisMobNo $SMSAvisMobNo
   * @param FaxNo $FaxNo
   * @param Email $Email
   * @param LanguageCode $LanguageCode
   */
  public function __construct($PartnerType = null, $PartnerNo = null, $PartnerReference = null, $Title = null, $Name1 = null, $Name2 = null, $Name3 = null, $Name4 = null, $Street = null, $CountryCode = null, $ZIPCode = null, $City = null, $POBox = null, $PhoneNo = null, $MobileNo = null, $SMSAvisMobNo = null, $FaxNo = null, $Email = null, $LanguageCode = null)
  {
    $this->PartnerType = $PartnerType;
    $this->PartnerNo = $PartnerNo;
    $this->PartnerReference = $PartnerReference;
    $this->Title = $Title;
    $this->Name1 = $Name1;
    $this->Name2 = $Name2;
    $this->Name3 = $Name3;
    $this->Name4 = $Name4;
    $this->Street = $Street;
    $this->CountryCode = $CountryCode;
    $this->ZIPCode = $ZIPCode;
    $this->City = $City;
    $this->POBox = $POBox;
    $this->PhoneNo = $PhoneNo;
    $this->MobileNo = $MobileNo;
    $this->SMSAvisMobNo = $SMSAvisMobNo;
    $this->FaxNo = $FaxNo;
    $this->Email = $Email;
    $this->LanguageCode = $LanguageCode;
  }

  /**
   * 
   * @return PartnerType
   */
  public function getPartnerType()
  {
    return $this->PartnerType;
  }

  /**
   * 
   * @param PartnerType $PartnerType
   * @return \YellowCube\Partner
   */
  public function setPartnerType($PartnerType)
  {
    $this->PartnerType = $PartnerType;
    return $this;
  }

  /**
   * 
   * @return PartnerNo
   */
  public function getPartnerNo()
  {
    return $this->PartnerNo;
  }

  /**
   * 
   * @param PartnerNo $PartnerNo
   * @return \YellowCube\Partner
   */
  public function setPartnerNo($PartnerNo)
  {
    $this->PartnerNo = $PartnerNo;
    return $this;
  }

  /**
   * 
   * @return PartnerReference
   */
  public function getPartnerReference()
  {
    return $this->PartnerReference;
  }

  /**
   * 
   * @param PartnerReference $PartnerReference
   * @return \YellowCube\Partner
   */
  public function setPartnerReference($PartnerReference)
  {
    $this->PartnerReference = $PartnerReference;
    return $this;
  }

  /**
   * 
   * @return Title
   */
  public function getTitle()
  {
    return $this->Title;
  }

  /**
   * 
   * @param Title $Title
   * @return \YellowCube\Partner
   */
  public function setTitle($Title)
  {
    $this->Title = $Title;
    return $this;
  }

  /**
   * 
   * @return Name1
   */
  public function getName1()
  {
    return $this->Name1;
  }

  /**
   * 
   * @param Name1 $Name1
   * @return \YellowCube\Partner
   */
  public function setName1($Name1)
  {
    $this->Name1 = $Name1;
    return $this;
  }

  /**
   * 
   * @return Name2
   */
  public function getName2()
  {
    return $this->Name2;
  }

  /**
   * 
   * @param Name2 $Name2
   * @return \YellowCube\Partner
   */
  public function setName2($Name2)
  {
    $this->Name2 = $Name2;
    return $this;
  }

  /**
   * 
   * @return Name3
   */
  public function getName3()
  {
    return $this->Name3;
  }

  /**
   * 
   * @param Name3 $Name3
   * @return \YellowCube\Partner
   */
  public function setName3($Name3)
  {
    $this->Name3 = $Name3;
    return $this;
  }

  /**
   * 
   * @return Name4
   */
  public function getName4()
  {
    return $this->Name4;
  }

  /**
   * 
   * @param Name4 $Name4
   * @return \YellowCube\Partner
   */
  public function setName4($Name4)
  {
    $this->Name4 = $Name4;
    return $this;
  }

  /**
   * 
   * @return Street
   */
  public function getStreet()
  {
    return $this->Street;
  }

  /**
   * 
   * @param Street $Street
   * @return \YellowCube\Partner
   */
  public function setStreet($Street)
  {
    $this->Street = $Street;
    return $this;
  }

  /**
   * 
   * @return CountryCode
   */
  public function getCountryCode()
  {
    return $this->CountryCode;
  }

  /**
   * 
   * @param CountryCode $CountryCode
   * @return \YellowCube\Partner
   */
  public function setCountryCode($CountryCode)
  {
    $this->CountryCode = $CountryCode;
    return $this;
  }

  /**
   * 
   * @return ZIPCode
   */
  public function getZIPCode()
  {
    return $this->ZIPCode;
  }

  /**
   * 
   * @param ZIPCode $ZIPCode
   * @return \YellowCube\Partner
   */
  public function setZIPCode($ZIPCode)
  {
    $this->ZIPCode = $ZIPCode;
    return $this;
  }

  /**
   * 
   * @return City
   */
  public function getCity()
  {
    return $this->City;
  }

  /**
   * 
   * @param City $City
   * @return \YellowCube\Partner
   */
  public function setCity($City)
  {
    $this->City = $City;
    return $this;
  }

  /**
   * 
   * @return POBox
   */
  public function getPOBox()
  {
    return $this->POBox;
  }

  /**
   * 
   * @param POBox $POBox
   * @return \YellowCube\Partner
   */
  public function setPOBox($POBox)
  {
    $this->POBox = $POBox;
    return $this;
  }

  /**
   * 
   * @return PhoneNo
   */
  public function getPhoneNo()
  {
    return $this->PhoneNo;
  }

  /**
   * 
   * @param PhoneNo $PhoneNo
   * @return \YellowCube\Partner
   */
  public function setPhoneNo($PhoneNo)
  {
    $this->PhoneNo = $PhoneNo;
    return $this;
  }

  /**
   * 
   * @return MobileNo
   */
  public function getMobileNo()
  {
    return $this->MobileNo;
  }

  /**
   * 
   * @param MobileNo $MobileNo
   * @return \YellowCube\Partner
   */
  public function setMobileNo($MobileNo)
  {
    $this->MobileNo = $MobileNo;
    return $this;
  }

  /**
   * 
   * @return SMSAvisMobNo
   */
  public function getSMSAvisMobNo()
  {
    return $this->SMSAvisMobNo;
  }

  /**
   * 
   * @param SMSAvisMobNo $SMSAvisMobNo
   * @return \YellowCube\Partner
   */
  public function setSMSAvisMobNo($SMSAvisMobNo)
  {
    $this->SMSAvisMobNo = $SMSAvisMobNo;
    return $this;
  }

  /**
   * 
   * @return FaxNo
   */
  public function getFaxNo()
  {
    return $this->FaxNo;
  }

  /**
   * 
   * @param FaxNo $FaxNo
   * @return \YellowCube\Partner
   */
  public function setFaxNo($FaxNo)
  {
    $this->FaxNo = $FaxNo;
    return $this;
  }

  /**
   * 
   * @return Email
   */
  public function getEmail()
  {
    return $this->Email;
  }

  /**
   * 
   * @param Email $Email
   * @return \YellowCube\Partner
   */
  public function setEmail($Email)
  {
    $this->Email = $Email;
    return $this;
  }

  /**
   * 
   * @return LanguageCode
   */
  public function getLanguageCode()
  {
    return $this->LanguageCode;
  }

  /**
   * 
   * @param LanguageCode $LanguageCode
   * @return \YellowCube\Partner
   */
  public function setLanguageCode($LanguageCode)
  {
    $this->LanguageCode = $LanguageCode;
    return $this;
  }

}
