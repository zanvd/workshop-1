<?php
namespace Workshop\Application\Factory;

use Workshop\Application\Application;
use Workshop\Container\ServiceContainer;
use Workshop\Container\ServiceContainerInterface;

class ApplicationFactory implements ServiceContainerInterface {
    /**
     * Creates new instance of Application class with Request container and ID of given container.
     *
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
