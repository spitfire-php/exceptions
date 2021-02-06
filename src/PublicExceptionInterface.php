<?php namespace spitfire\exceptions;


interface PublicExceptionInterface
{
	
	/**
	 * Returns a suggested HTTP Code that can be returned safely to the 
	 * client to indicate the kind of issue.
	 * 
	 * @return int
	 */
    public function httpCode() : int;
    
}
