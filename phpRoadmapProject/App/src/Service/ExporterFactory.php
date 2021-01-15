<?php

namespace App\Service;


class ExporterFactory
{

    /**
     * @param string $format
     *
     * @return ExporterInterface
     */
    public function buildExport(string $format): ExporterInterface
    {
        switch ($format)
        {
            case 'json':
                return new JsonExporter();
            case 'csv':
                return new CsvExporter();
        }
    }
}