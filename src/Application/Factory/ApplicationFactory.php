<?php
namespace Workshop\Application\Factory;

use Workshop\Application\Application;
use Workshop\Container\ServiceContainer;
use Workshop\Container\ServiceContainerInterface;

class ApplicationFactory implements ServiceContainerInterface {
    /**
     * @param ServiceContainer $container
     * @param $id
     * @return Application
     * @throws \Exception
     */
    public function createService(ServiceContainer $container, $id) {
        return new Application(
            $container->get('Request'),
            $container
        );
    }
}