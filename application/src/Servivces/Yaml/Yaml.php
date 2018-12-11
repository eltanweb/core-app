<?php

namespace Finance\Servivces\Yaml;

class Yaml
{

    /***
     * load yaml confguration from
     * config and generate PHP value
     * @param string $fileName
     * @return mixed
     */
    public function parseFile(string $fileName = null)
    {
        $yaml = new Parser();
        return $yaml->parseFile($fileName);
    }

}