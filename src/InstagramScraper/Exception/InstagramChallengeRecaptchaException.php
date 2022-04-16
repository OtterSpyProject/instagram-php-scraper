<?php

namespace InstagramScraper\Exception;

use InstagramScraper\Http\Response;

class InstagramChallengeRecaptchaException extends InstagramException
{
    public function __construct($message = "", $code = 400, Response $response = null, $previous = null)
    {
        parent::__construct($message, $code, $response, $previous);
    }
}
