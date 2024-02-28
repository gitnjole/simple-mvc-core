<?php

namespace gitnjole\simplemvc\middlewares;

abstract class BaseMiddleware
{
    abstract public function handle();
}