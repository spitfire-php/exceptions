<?php namespace spitfire\exceptions\user;

use Exception;
use spitfire\exceptions\PublicExceptionInterface;
use spitfire\exceptions\ApplicationException as ExceptionsApplicationException;

/**
 * This kind of exception (or exceptions inheriting from it) are usually thrown when the
 * application runs into an issue that is neither a lack of permission or a resource that
 * can't be found.
 * 
 * Your application should not include sensitive information into the message of these
 * exceptions, the application will render this to the user.
 * 
 * In the event of your application wishing to provide additional information, use the
 * previous parameter to indicate the deeper rooted cause of the issue.
 */
class ApplicationException extends ExceptionsApplicationException implements PublicExceptionInterface
{
	
    public function httpCode() : int
    {
        return 500;
    }
}
