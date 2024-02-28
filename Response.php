<?php
namespace gitnjole\simplemvc;

class Response
{
    public function setStatusCode(int $code)
    {

    }

    public function redirect(string $path)
    {
        return header ('Location: '.$path);
    }
}