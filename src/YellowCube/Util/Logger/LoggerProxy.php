<?php

namespace YellowCube\Util\Logger;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

/**
 * Logger which forwards calls to a given logger, if given.
 *
 * This is useful for not cluttering the implementation with checks
 * if a logger is set.
 *
 * @package YellowCube\Util\Logger
 */
class LoggerProxy extends AbstractLogger {

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
    public function log($level, $message, array $context = array())
    {
        if (!empty($this->logger)) {
            $this->logger->log($level, $message, $context);
        }
    }
}
