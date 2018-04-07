<?php

namespace Workshop\Application;


use Workshop\Container\ServiceContainer;
use Zend\Diactoros\ServerRequest;

class Application {
    /**
     * @var
     */
    public static $config;

    /**
     * @var Application $app
     */
    private static $app = null;

    /**
     * @var ServerRequest $request
     */
    private $request;

    /**
     * @var ServiceContainer $container
     */
    private $container;

    public function __construct(ServerRequest $request, ServiceContainer $container) {
        $this->request = $request;
        $this->container = $container;
    }

    /**
     * Initializes framework
     * @param string $configPath
     * @return
     * @throws \Exception
     */
    public static function init(string $configPath) {
        $config = require $configPath;
        self::$config = $config;

        $container = new ServiceContainer();
        $container->setContainer($config['container']);

        self::$app = $container->get('Application');
        return self::$app;
    }


    /**
     * Runs framework
     */
    public function run() {
        echo "Dela";
    }


}