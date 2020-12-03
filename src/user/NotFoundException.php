<?php namespace spitfire\exceptions\user;

use spitfire\exceptions\NotFoundException as ExceptionsNotFoundException;
use spitfire\exceptions\PublicExceptionInterface;

/**
 * Whenever this exception, or a exception that inherits from it is raised, the user is
 * trying to access a resource that is not available to the system, or to the user.
 */
class NotFoundException extends ExceptionsNotFoundException implements PublicExceptionInterface
{

    public function httpCode() {
        return 404;
    }
}
