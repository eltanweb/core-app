<?php

namespace Finance\CoreApi\Interfaces;

use Finance\CoreApi\Router\Request\RequestContext;

interface CommandInterface
{

    public function exec(RequestContext $context);

}