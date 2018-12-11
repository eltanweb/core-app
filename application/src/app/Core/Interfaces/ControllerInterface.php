<?php
/**
 * Created by PhpStorm.
 * User: nibbler
 * Date: 25/10/2018
 * Time: 20:49
 */

namespace Finance\CoreApi\Interfaces;


use Finance\CoreApi\Response;
use Finance\CoreApi\Router\Request\RequestContext;

interface ControllerInterface
{

    public function run(RequestContext $context);

}