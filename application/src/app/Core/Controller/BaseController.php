<?php
/**
 * Created by PhpStorm.
 * User: nibbler
 * Date: 25/10/2018
 * Time: 20:44
 */

namespace Finance\CoreApi\Controller;

use Finance\CoreApi\Interfaces\ControllerInterface;
use Finance\CoreApi\Response;
use Finance\CoreApi\Router\Request\RequestContext;

class BaseController implements ControllerInterface
{

    private $context;

    public function run(RequestContext $context)
    {
        $this->context = $context;
    }

}