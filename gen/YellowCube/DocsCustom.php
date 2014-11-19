<?php

namespace YellowCube;

class DocsCustom
{

  /**
   * 
   * @var DocType $DocType
   */
  protected $DocType = null;

  /**
   * 
   * @var DocMimeType $DocMimeType
   */
  protected $DocMimeType = null;

  /**
   * 
   * @var base64Binary $DocStream
   */
  protected $DocStream = null;

  /**
   * 
   * @param DocType $DocType
   * @param DocMimeType $DocMimeType
   * @param base64Binary $DocStream
   */
  public function __construct($DocType = null, $DocMimeType = null, $DocStream = null)
  {
    $this->DocType = $DocType;
    $this->DocMimeType = $DocMimeType;
    $this->DocStream = $DocStream;
  }

  /**
   * 
   * @return DocType
   */
  public function getDocType()
  {
    return $this->DocType;
  }

  /**
   * 
   * @param DocType $DocType
   * @return \YellowCube\Docs
   */
  public function setDocType($DocType)
  {
    $this->DocType = $DocType;
    return $this;
  }

  /**
   * 
   * @return DocMimeType
   */
  public function getDocMimeType()
  {
    return $this->DocMimeType;
  }

  /**
   * 
   * @param DocMimeType $DocMimeType
   * @return \YellowCube\Docs
   */
  public function setDocMimeType($DocMimeType)
  {
    $this->DocMimeType = $DocMimeType;
    return $this;
  }

  /**
   * 
   * @return base64Binary
   */
  public function getDocStream()
  {
    return $this->DocStream;
  }

  /**
   * 
   * @param base64Binary $DocStream
   * @return \YellowCube\Docs
   */
  public function setDocStream($DocStream)
  {
    $this->DocStream = $DocStream;
    return $this;
  }

}
