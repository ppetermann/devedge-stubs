<?php
namespace Devedge\Log;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Class NoLog PSR compatible "non-logging" log implementation
 */
class NoLog extends NullLogger implements LoggerInterface
{

}