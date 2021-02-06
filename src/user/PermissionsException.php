<?php namespace spitfire\exceptions\user;

use Exception;
use spitfire\exceptions\PermissionsException as ExceptionsPermissionsException;
use spitfire\exceptions\PublicExceptionInterface;

/**
 * Indicates an issue with file permissions.
 */
class PermissionsException extends ExceptionsPermissionsException implements PublicExceptionInterface
{

    public function httpCode() : int
    {
        return 403;
    }
}
