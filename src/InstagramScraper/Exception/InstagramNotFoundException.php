<?php

namespace InstagramScraper\Exception;

use InstagramScraper\Http\Response;

class InstagramNotFoundException extends InstagramException
{
    public function __construct($message = "", $code = 404, Response $response = null, $previous = null)
    {
        parent::__construct($message, $code, $response, $previous);
    }
}