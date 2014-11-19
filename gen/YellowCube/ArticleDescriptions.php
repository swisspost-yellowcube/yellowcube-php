<?php

namespace YellowCube;

class ArticleDescriptions
{

  /**
   * 
   * @var ArticleDescription $ArticleDescription
   */
  protected $ArticleDescription = null;

  /**
   * 
   * @param ArticleDescription $ArticleDescription
   */
  public function __construct($ArticleDescription = null)
  {
    $this->ArticleDescription = $ArticleDescription;
  }

  /**
   * 
   * @return ArticleDescription
   */
  public function getArticleDescription()
  {
    return $this->ArticleDescription;
  }

  /**
   * 
   * @param ArticleDescription $ArticleDescription
   * @return \YellowCube\ArticleDescriptions
   */
  public function setArticleDescription($ArticleDescription)
  {
    $this->ArticleDescription = $ArticleDescription;
    return $this;
  }

}
