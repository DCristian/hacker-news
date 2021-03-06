<?php

namespace Controller\Provider;

use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Silex\ControllerCollection;

class UserProvider implements ControllerProviderInterface
{
    /**
     * @param Application $app
     *
     * @return mixed|ControllerCollection
     */
    public function connect(Application $app)
    {
        $news = $app['controllers_factory'];

        $news->get('/{id}', 'Controller\\UserController::get')->bind('user');

        return $news;
    }
}