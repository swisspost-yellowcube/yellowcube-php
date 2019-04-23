<?php

namespace YellowCube\BAR;

/**
 * Represents the YellowCube article inventory.
 */
class Inventory
{

    /**
     * List of articles.
     *
     * @var \YellowCube\BAR\Article[]
     */
    protected $articles;

    /**
     * Timestamp of the inventory.
     *
     * @var string
     */
    protected $timestamp;

    /**
     * Inventory constructor.
     *
     * @param \YellowCube\BAR\Article[] $articles
     * @param string $timestamp
     */
    public function __construct(array $articles, $timestamp)
    {
        $this->articles = $articles;
        $this->timestamp = $timestamp;
    }

    /**
     * Returns the articles in the inventory.
     *
     * @return \YellowCube\BAR\Article[]
     *
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set the articles in the inventory
     * @param \YellowCube\BAR\Article[] $articles
     *
     * @return \YellowCube\BAR\Inventory
     */
    public function setArticles(array $articles)
    {
        $this->articles = $articles;
        return $this;
    }

    /**
     * Returns the timestamp of the inventory.
     *
     * @return string
     *   The timestamp in the form of YmdHis.
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set the timestamp of the inventory.
     *
     * @param string $timestamp
     *
     * @return \YellowCube\BAR\Inventory
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }



}
