<?php

namespace YellowCube;

class ArticleDescription
{

  /**
   * 
   * @var ArticleDescription $_
   */
  protected $_ = null;

  /**
   * 
   * @var anonymous168 $ArticleDescriptionLC
   */
  protected $ArticleDescriptionLC = null;

  /**
   * 
   * @param ArticleDescription $_
   * @param anonymous168 $ArticleDescriptionLC
   */
  public function __construct($_ = null, $ArticleDescriptionLC = null)
  {
    $this->_ = $_;
    $this->ArticleDescriptionLC = $ArticleDescriptionLC;
  }

  /**
   * 
   * @return ArticleDescription
   */
  public function get_()
  {
    return $this->_;
  }

  /**
   * 
   * @param ArticleDescription $_
   * @return \YellowCube\ArticleDescription
   */
  public function set_($_)
  {
    $this->_ = $_;
    return $this;
  }

  /**
   * 
   * @return anonymous168
   */
  public function getArticleDescriptionLC()
  {
    return $this->ArticleDescriptionLC;
  }

  /**
   * 
   * @param anonymous168 $ArticleDescriptionLC
   * @return \YellowCube\ArticleDescription
   */
  public function setArticleDescriptionLC($ArticleDescriptionLC)
  {
    $this->ArticleDescriptionLC = $ArticleDescriptionLC;
    return $this;
  }

}
