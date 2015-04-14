<?php
/**
 * @file
 * Implementation adapted from https://www.drupal.org/project/psr3_watchdog
 */

namespace YellowCube\Util;

use Psr\Log\AbstractLogger as PsrAbstractLogger;
use Psr\Log\LogLevel;

/**
 */
abstract class AbstractLogger extends PsrAbstractLogger {

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

    protected $minLevel;

    public function __construct($minLevel)
    {
        $this->minLevel = $minLevel;
    }

    /**
     * @inheritdoc
     */
    public abstract function log($level, $message, array $context = array());

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
        return array_search($level, array_keys(self::$levelOrder));
    }
}
