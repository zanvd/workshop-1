<?php
namespace Workshop\Request\Factory;

use Workshop\Container\ServiceContainer;
use Workshop\Container\ServiceContainerInterface;
use Zend\Diactoros\ServerRequestFactory;

class RequestFactory implements ServiceContainerInterface {
    /**
     * @param ServiceContainer $container
     * @param $id
     * @return \Zend\Diactoros\ServerRequest
     */
    public function createService(ServiceContainer $container, $id) {
        return $request = ServerRequestFactory::fromGlobals(
            $_SERVER,
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES
        );
    }
}