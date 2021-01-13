<?php

namespace App\Service;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ExporterFactory
{

    /**
     * @param string $format
     *
     * @return string
     */
    public function makeExport(string $format): string
    {
        if ($format === 'json')
        {
            $scvFile = new JsonExporter();
            return $scvFile->$this->makeExport('csv');
        }
        elseif ($format === 'csv')
        {
            $scvFile = new CsvExporter();
            return $scvFile->$this->makeExport('csv');
        }
        else
        {
            return new NotFoundHttpException('The product does not exist');
        }

    }
}