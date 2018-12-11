<?php declare(strict_types=1);

namespace Finance\app\Core;

use Finance\Servivces\Yaml\Yaml;
use Finance\modules\Router\Request\Request;
use Finance\ConfigLoader;
use Finance\app\Router\Router;
use Finance\Dispatcher;

/**
 * Class Application
 * @package Finance
 */
class Application
{

    /**
     * @var bool
     */
    private $debugMode;

    /**
     * @var array
     */
    private $routers = [];

    /**
     * @var ConfigLoader
     */
    private $config;

    /***
     * Application constructor.
     * @param bool $debug
     * @param ConfigLoader $config
     * @param string $routing
     */
    public function __construct($debug = false, ConfigLoader $config = null, string $routing = null)
    {
        $this->debugMode = $debug;
        $this->config = $config;
        $this->routers = (new Yaml())->parseFile($routing);
    }

    /**
     * Иницилизируем основные компоненты
     */
    public function Run()
    {
        try {
            $request = (new Request())->initRequest();
            $router = new Router($this->routers);
            $router->run($request);
        } catch (\Throwable $e) {
            throw new \Error($e->getMessage());
        }
    }

}