<?php declare(strict_types = 1);

namespace Mangoweb\ExceptionResponsibility;

use Throwable;


/**
 * Caused by bug in client (web browser, mobile app using API...)
 */
interface ResponsibilityClient extends Throwable
{

}
