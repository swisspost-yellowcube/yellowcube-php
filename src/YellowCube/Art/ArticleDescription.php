<?php

namespace YellowCube\Art;

class ArticleDescription
{

  /**
   *
   * @var ArticleDescription $_
   */
  protected $_ = null;

  /**
   *
   * @var anonymous171 $ArticleDescriptionLC
   */
  protected $ArticleDescriptionLC = null;

  /**
   *
   * @param ArticleDescription $_
   * @param string $ArticleDescriptionLC Language constant, e.g. 'de', 'fr', ...
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
   * @return \YellowCube\API\ArticleDescription
   */
  public function set_($_)
  {
    $this->_ = $_;
    return $this;
  }

  /**
   *
   * @return anonymous171
   */
  public function getArticleDescriptionLC()
  {
    return $this->ArticleDescriptionLC;
  }

  /**
   *
   * @param anonymous171 $ArticleDescriptionLC
   * @return \YellowCube\API\ArticleDescription
   */
  public function setArticleDescriptionLC($ArticleDescriptionLC)
  {
    $this->ArticleDescriptionLC = $ArticleDescriptionLC;
    return $this;
  }

}
