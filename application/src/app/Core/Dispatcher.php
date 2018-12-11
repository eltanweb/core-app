<?php
/**
 * Created by PhpStorm.
 * User: nibbler
 * Date: 28/10/2018
 * Time: 08:08
 */

namespace Finance;

use Finance\app\Router\RouterBase;
use Finance\modules\Router\Request\Request;
use Finance\modules\Router\Request\RequestContext;

class Dispatcher
{
    private $router;

    public function __construct(RouterBase $router)
    {
        $this->router = $router;
    }

    public function handle(RequestContext $request)
    {
        $handler = $this->router->match($request);
        if ($handler) {
            call_user_func_array(array($conroller, $action), $params);
        } else {
            throw new RequestException('не найден обработчик');
        }
    }
}