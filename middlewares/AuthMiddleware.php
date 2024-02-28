<?php

namespace gitnjole\simplemvc\middlewares;

use gitnjole\simplemvc\Application;
use gitnjole\simplemvc\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function handle ()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
               throw new ForbiddenException();
            }
        }
    }
}