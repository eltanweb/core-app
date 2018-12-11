<?php

namespace Finance\Servivces\Yaml;

use Finance\Servivces\Exception\ParsingException;

class Parser
{
    /***
     * @var path to config *.yml
     */
    private $filename;

    /***
     * parse file into PHP value
     * @param string $file
     * @return mixed|null
     */
    public function parseFile(string $file)
    {
        if (!is_file($file)) {
            throw new ParsingException(sprintf('file does not exists', $file));
        }

        if (!is_readable($file)) {
            throw new ParsingException('File cannot be read', $file);
        }

        $this->filename = $file;

        try {
            return $this->parse(file_get_contents($file));
        } finally {
            $this->filename = null;
        }
    }

    /***
     * read context from memory
     * @param string $value
     * @return mixed
     */
    private function parse(string $value)
    {
        $data = yaml_parse($value);
        return $data;
    }

}