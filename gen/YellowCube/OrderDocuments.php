<?php

namespace YellowCube;

class OrderDocuments
{

  /**
   * 
   * @var OrderDocFilenames $OrderDocFilenames
   */
  protected $OrderDocFilenames = null;

  /**
   * 
   * @var Docs $Docs
   */
  protected $Docs = null;

  /**
   * 
   * @var anonymous71 $OrderDocumentsFlag
   */
  protected $OrderDocumentsFlag = null;

  /**
   * 
   * @param OrderDocFilenames $OrderDocFilenames
   * @param Docs $Docs
   * @param anonymous71 $OrderDocumentsFlag
   */
  public function __construct($OrderDocFilenames = null, $Docs = null, $OrderDocumentsFlag = null)
  {
    $this->OrderDocFilenames = $OrderDocFilenames;
    $this->Docs = $Docs;
    $this->OrderDocumentsFlag = $OrderDocumentsFlag;
  }

  /**
   * 
   * @return OrderDocFilenames
   */
  public function getOrderDocFilenames()
  {
    return $this->OrderDocFilenames;
  }

  /**
   * 
   * @param OrderDocFilenames $OrderDocFilenames
   * @return \YellowCube\OrderDocuments
   */
  public function setOrderDocFilenames($OrderDocFilenames)
  {
    $this->OrderDocFilenames = $OrderDocFilenames;
    return $this;
  }

  /**
   * 
   * @return Docs
   */
  public function getDocs()
  {
    return $this->Docs;
  }

  /**
   * 
   * @param Docs $Docs
   * @return \YellowCube\OrderDocuments
   */
  public function setDocs($Docs)
  {
    $this->Docs = $Docs;
    return $this;
  }

  /**
   * 
   * @return anonymous71
   */
  public function getOrderDocumentsFlag()
  {
    return $this->OrderDocumentsFlag;
  }

  /**
   * 
   * @param anonymous71 $OrderDocumentsFlag
   * @return \YellowCube\OrderDocuments
   */
  public function setOrderDocumentsFlag($OrderDocumentsFlag)
  {
    $this->OrderDocumentsFlag = $OrderDocumentsFlag;
    return $this;
  }

}
