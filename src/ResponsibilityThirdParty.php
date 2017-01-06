<?php declare(strict_types = 1);

namespace Mangoweb\ExceptionResponsibility;

use Throwable;


/**
 * Caused by third party (e.g. payment gateway returns 5xx error)
 */
interface ResponsibilityThirdParty extends Throwable
{

}
