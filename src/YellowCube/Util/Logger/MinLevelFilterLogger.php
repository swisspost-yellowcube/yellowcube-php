<?php
/**
 * @file
 * Implementation adapted from https://www.drupal.org/project/psr3_watchdog
 */

namespace YellowCube\Util\Logger;

use Assert\Assertion;
use Psr\Log\AbstractLogger as PsrAbstractLogger;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Filters out all log messages which are less than a given minimum log level.
 *
 * @author Adrian Philipp <adrian.philipp@liip.ch>
 */
class MinLevelFilterLogger extends PsrAbstractLogger
{

    /**
     * @var array Stores levels in order of importance, low to high.
     */
    static $levelOrder = array(
        LogLevel::DEBUG,
        LogLevel::INFO,
        LogLevel::NOTICE,
        LogLevel::WARNING,
        LogLevel::ERROR,
        LogLevel::CRITICAL,
        LogLevel::ALERT,
        LogLevel::EMERGENCY,
    );

    /**
     * @var string Minimum log level.
     */
    protected $minLevel;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param string $minLevel One of the \Psr\Log\LogLevel constants.
     * @param \Psr\Log\LoggerInterface $logger
     *
     * @throws \InvalidArgumentException if log level is invalid.
     */
    public function __construct($minLevel, LoggerInterface $logger)
    {
        Assertion::choice($minLevel, self::$levelOrder, "Level '{$minLevel}' is not defined.");

        $this->minLevel = $minLevel;
        $this->logger = $logger;
    }

    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = array())
    {
        if ($this->isLevelLessThanMinimum($level)) {
            return;
        }

        $this->logger->log($level, $message, $context);
    }

    /**
     * Returns true if the given level is less important than
     * the configured minimum level.
     *
     * @param $level
     * @return bool
     */
    protected function isLevelLessThanMinimum($level)
    {
        return $this->getLevelOrder($level) < $this->getLevelOrder($this->minLevel);
    }

    /**
     * Returns the order (index) of given level.
     *
     * @param string $level Level like LogLevel::DEBUG.
     *
     * @return integer Index of the level in the order.
     */
    protected function getLevelOrder($level)
    {
        return array_search($level, self::$levelOrder);
    }
}
