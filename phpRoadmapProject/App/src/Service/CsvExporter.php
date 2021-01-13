<?php

namespace App\Service;


class CsvExporter implements ExporterInterface
{
    /**
     * @param String $file
     */
    public function exportFile(String $file): string
    {
        $jsonFile = $file;
        return strtolower($jsonFile);
    }
}