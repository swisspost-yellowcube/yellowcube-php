<?php

namespace YellowCube;

class ArticleList
{

  /**
   * 
   * @var Article $Article
   */
  protected $Article = null;

  /**
   * 
   * @param Article $Article
   */
  public function __construct($Article = null)
  {
    $this->Article = $Article;
  }

  /**
   * 
   * @return Article
   */
  public function getArticle()
  {
    return $this->Article;
  }

  /**
   * 
   * @param Article $Article
   * @return \YellowCube\ArticleList
   */
  public function setArticle($Article)
  {
    $this->Article = $Article;
    return $this;
  }

}
