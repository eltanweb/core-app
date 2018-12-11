<?php

namespace Finance\CoreApi\Interfaces;

interface Observable
{
    public function attach(Observable $object):void;
    public function detach(Observable $object):bool;
    public function notity();
}