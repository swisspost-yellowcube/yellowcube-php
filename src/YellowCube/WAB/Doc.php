<?php

namespace YellowCube\WAB;

use Assert\Assertion;

class Doc
{
    /**
     * DocTyp Shipment
     */
    const DOC_TYPE_LS = 'LS';

    /**
     * DocTyp Invoice
     */
    const DOC_TYPE_IV = 'IV';

    /**
     * DocTyp Payment confirmation
     */
    const DOC_TYPE_ZS = 'ZS';

    /**
     * Mime Type PCL
     */
    const MIME_TYPE_PCL = 'pcl'; // must be small caps

    /**
     * Mime Type PDF
     */
    const MIME_TYPE_PDF = 'pdf'; // must be small caps

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
     *
     * @throws \InvalidArgumentException If the file does not exist or is not readable.
     */
    public static function fromFile($DocType, $DocMimeType, $FilePath)
    {
        Assertion::file($FilePath, "{$FilePath} does not exist.");
        Assertion::readable($FilePath, "{$FilePath} is not readable.");

        return new self(
            $DocType,
            $DocMimeType,
            file_get_contents($FilePath)
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
