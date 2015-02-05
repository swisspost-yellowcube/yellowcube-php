<?php

namespace YellowCube\WAB;

use \Assert\AssertionChain;

class Doc
{

    /**
     *
     * @var string $DocType
     */
    protected $DocType = null;

    /**
     *
     * @var string $DocMimeType
     */
    protected $DocMimeType = null;

    /**
     *
     * @var string $DocStream
     */
    protected $DocStream = null;

    /**
     *
     * @param string $DocType
     * @param string $DocMimeType
     * @param string $DocStream
     */
    public function __construct($DocType, $DocMimeType, $DocStream)
    {
        $this->DocType = $DocType;
        $this->DocMimeType = $DocMimeType;
        $this->DocStream = $DocStream;
    }

    /**
     * Creates a new Doc with the DocStream set to the content of
     * the specified file path.
     *
     * @param $DocType
     * @param $DocMimeType
     * @param $FilePath
     * @return Doc
     */
    public static function fromFile($DocType, $DocMimeType, $FilePath)
    {
        $assertionChain = new AssertionChain($FilePath);
        $assertionChain
            ->file("{$FilePath} does not exist.")
            ->readable("{$FilePath} is not readable.");

       return new self(
           $DocType,
           $DocMimeType,
           base64_encode(file_get_contents($FilePath))
       );
    }

    /**
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->DocType;
    }

    /**
     *
     * @param string $DocType
     */
    public function setDocType($DocType)
    {
        $this->DocType = $DocType;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDocMimeType()
    {
        return $this->DocMimeType;
    }

    /**
     *
     * @param string $DocMimeType
     */
    public function setDocMimeType($DocMimeType)
    {
        $this->DocMimeType = $DocMimeType;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDocStream()
    {
        return $this->DocStream;
    }

    /**
     *
     * @param string $DocStream
     */
    public function setDocStream($DocStream)
    {
        $this->DocStream = $DocStream;
        return $this;
    }

}
