<?php

namespace YellowCube\ART;

use YellowCube\Util\SimpleValue;

class ArticleDescription extends SimpleValue
{
    /**
     *
     * @var string $ArticleDescriptionLC
     */
    protected $ArticleDescriptionLC = null;

    /**
     *
     * @param ArticleDescription $description
     * @param string $ArticleDescriptionLC Language constant, e.g. 'de', 'fr', ...
     */
    public function __construct($description, $ArticleDescriptionLC)
    {
        parent::__construct($description);
        $this->ArticleDescriptionLC = $ArticleDescriptionLC;
    }

    /**
     *
     * @return string
     */
    public function getArticleDescriptionLC()
    {
        return $this->ArticleDescriptionLC;
    }

    /**
     * @param string $ArticleDescriptionLC
     */
    public function setArticleDescriptionLC($ArticleDescriptionLC)
    {
        $this->ArticleDescriptionLC = $ArticleDescriptionLC;
        return $this;
    }
}
