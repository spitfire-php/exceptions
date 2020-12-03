<?php namespace spitfire\exceptions\user;

use Exception;
use spitfire\exceptions\PublicExceptionInterface;
use spitfire\exceptions\ApplicationException as ExceptionsApplicationException;

/**
 * Indicates an issue with file permissions.
 */
class ApplicationException extends ExceptionsApplicationException implements PublicExceptionInterface
{

    public function httpCode()
    {
        return 500;
    }
}
