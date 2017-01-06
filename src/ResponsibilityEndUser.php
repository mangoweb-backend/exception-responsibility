<?php declare(strict_types = 1);

namespace Mangoweb\ExceptionResponsibility;

use Throwable;


/**
 * Caused by end user's choice (e.g. choosing too short password)
 */
interface ResponsibilityEndUser extends Throwable
{

}
