<?php declare(strict_types = 1);

namespace Mangoweb\ExceptionResponsibility;

use Throwable;


/**
 * Caused by sth that no one can reliable prevent (e.g. choosing nickname already used by another player)
 */
interface ResponsibilityNobody extends Throwable
{

}
