<?php
/**
 * @file
 * Implementation adapted from https://www.drupal.org/project/psr3_watchdog
 */


use Psr\Log\AbstractLogger;
use Psr\Log\LogLevel;

/**
 * Logs into drupals watchdog.
 */
class WatchdogLogger extends AbstractLogger {

    static $levelMap = array(
      LogLevel::EMERGENCY => WATCHDOG_EMERGENCY,
      LogLevel::ALERT => WATCHDOG_ALERT,
      LogLevel::CRITICAL => WATCHDOG_CRITICAL,
      LogLevel::ERROR => WATCHDOG_ERROR,
      LogLevel::WARNING => WATCHDOG_WARNING,
      LogLevel::NOTICE => WATCHDOG_NOTICE,
      LogLevel::INFO => WATCHDOG_INFO,
      LogLevel::DEBUG => WATCHDOG_DEBUG,
    );

    protected $type;
    protected $minLevel;

    public function __construct($moduleName = 'drupal-yellowcube', $minLevel = LogLevel::DEBUG)
    {
        $this->type = $moduleName;
        $this->minLevel = $minLevel;
    }

    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = array()) {
        if ($level < $this->minLevel) {
            return;
        }

        $variables = array();
        foreach ($context as $key => $value) {
            if (strpos($message, '{' . $key . '}') !== FALSE) {
                $variables['@' . $key] = $value;
                $message = str_replace('{' . $key . '}', '@' . $key, $message);
            }
        }

        watchdog($this->type, $message, $variables + $context, self::$levelMap[$level]);
    }
}
