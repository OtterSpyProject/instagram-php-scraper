<?php

namespace InstagramScraper\Exception;

use InstagramScraper\Http\Response;

class InstagramException extends \Exception
{
    protected ?Response $response;
    
    public function __construct($message = "", $code = 500, Response $response = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }
    
    public function response(): ?Response
    {
        return $this->response;
    }
}