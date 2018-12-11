<?php

namespace Finance\app\Router;

use Finance\modules\Router\Request\Request;
use Finance\modules\Router\Response\Response;

final class Router
{
    /****
     * Context application
     * @var RequestContext
     */
    protected $context;

    /*****
     * collection of routers
     * @var
     */
    protected $collection;

    /****
     * Router constructor.
     * @param RequestContext|null $context
     */
    public function __construct(array $routers)
    {
        $this->collection = $routers ?? null;
    }


    /**
     * @param RequestContext $context
     * @return array
     */
    public function run(Request $context): void
    {
        try {
            /** инит реквеста получаем контекст запроса */
            $this->context = $context ?: (new Request())->initRequest();
            /* матчим контекст запроса и роутингов приложения */
            $route = $this->matcher($this->collection, $context);
            /** если роутинг найден то через Фабричный метод ищим класс контроллер */
            if ($route == null) {

            } else {
                $response = (new Response())->withStatus(404, '');
                $response->send();
            }
            /** создаем объект контроллера и вызываем его */
        } catch (\Throwable $e) {
            $response = (new Response())->withStatus(500, $e->getMessage());
            $response->send();
        }
    }

    /**
     * приозводит сравнение входящего запроса с параметрами конфиша
     * @param array $collection
     * @param RequestContext $context
     * @return array
     */
    private function matcher(array $collection, Request $context)
    {
        $iterator = new \ArrayIterator($collection);
        while ($iterator->valid()) {
            $current = $iterator->current();
            if (in_array($context->getUri(), $current)) {
                return $current;
            }
        }
    }

    public function getParams()
    {
        return [];
    }

}