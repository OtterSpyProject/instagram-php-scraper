<?php

namespace InstagramScraper\Exception;

use InstagramScraper\Http\Response;

class InstagramAuthException extends InstagramException
{
    public function __construct($message = "", $code = 401, Response $response = null, $previous = null)
    {
        parent::__construct($message, $code, $response, $previous);
    }
}