<?php

namespace Finance;
use Finance\CoreApi\Http\FinanceException\ConfigException;

/**
 * Class Config
 * @package Finance
 */
class ConfigLoader
{

    /**
     * @var
     */
    private $config = [];

    private $debug = false;

    /**
     *  function for load config file;
     */
    public static function execute(array $configs): ConfigLoader
    {
        $self = new self();
        $self->load($configs);
        return $self;
    }

    private function load(array $configs)
    {
        foreach ($configs as $config) {
                if ( file_exists($config) ) {
                    $item = include_once($config);
                } else {
                    throw new \Exception('config is not a file', 500, null);
                }
                foreach ($item as $key => $value) {
                    $this->config[$key] = $value;
                }
        }
    }

    public function __get($name)
    {
        return $this->config[$name];
    }


}