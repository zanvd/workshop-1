<?php
namespace Workshop\Container;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class ServiceContainer implements ContainerInterface {
    /**
     * Containers are specified in config file.
     *
     * @var array
     */
    private $container = [];

    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     * @return mixed Entry.
     *
     * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     * @throws \Exception
     */
    public function get($id) {
        if ($this->has($id)) {
            $class = $this->container[$id];

            $object = new $class();

            return $object->createService($this, $id);
        }
    }

    /**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
     * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
     *
     * @param string $id Identifier of the entry to look for.
     * @return bool
     * @throws \Exception
     */
    public function has($id) {
        if (!isset($this->container[$id])) {
            throw new \Exception('Service not found!');
        }

        return true;
    }

    /**
     * Set container.
     *
     * @param array $container
     * @return $this Returns this for chained calling.
     */
    public function setContainer(array $container) {
        $this->container = $container;

        return $this;
    }
}
