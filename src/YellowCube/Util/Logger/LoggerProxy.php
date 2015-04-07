<?php

namespace YellowCube\Util\Logger;

use Psr\Log\LoggerInterface;

/**
 * Logger which forwards calls to a given logger, if given.
 *
 * This is useful for not cluttering the implementation with checks
 * if a logger is set.
 *
 * @package YellowCube\Util\Logger
 */
class LoggerProxy implements LoggerInterface {

    /**
     * @var LoggerInterface Optional logger.
     */
    protected $logger;

    /**
     * @param LoggerInterface $logger Optional logger.
     */
    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    /**
     * @inheritdoc
     */
    public function emergency($message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->emergency($message, $context);
        }
    }

    /**
     * @inheritdoc
     */
    public function alert($message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->alert($message, $context);
        }
    }

    /**
     * @inheritdoc
     */
    public function critical($message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->critical($message, $context);
        }
    }

    /**
     * @inheritdoc
     */
    public function error($message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->error($message, $context);
        }
    }

    /**
     * @inheritdoc
     */
    public function warning($message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->warning($message, $context);
        }
    }

    /**
     * @inheritdoc
     */
    public function notice($message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->notice($message, $context);
        }
    }

    /**
     * @inheritdoc
     */
    public function info($message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->info($message, $context);
        }
    }

    /**
     * @inheritdoc
     */
    public function debug($message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->debug($message, $context);
        }
    }

    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->log($level, $message, $context);
        }
    }
}
