<?php

namespace App\Service;


class JsonExporter implements ExporterInterface
{
    public function __construct()
    {

    }

    /**
     * @param String $file
     */
    public function exportFile(String $file): string
    {
        $jsonFile = $file;
        return strtoupper($jsonFile);
    }
}