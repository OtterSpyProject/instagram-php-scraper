<?php

namespace InstagramScraper\Exception;

use InstagramScraper\Http\Response;

class InstagramAgeRestrictedException extends InstagramException
{
    public function __construct($message = "", $code = 403, Response $response = null, $previous = null)
    {
        parent::__construct($message, $code, $response, $previous);
    }
}
