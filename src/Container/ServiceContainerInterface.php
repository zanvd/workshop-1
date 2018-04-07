<?php
namespace Workshop\Container;

interface ServiceContainerInterface {
    public function createService(ServiceContainer $container, $id);
}