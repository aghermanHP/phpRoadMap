<?php

namespace App\Service;

use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CsvExporter implements ExporterInterface
{
    /**
     * @param Object $jobDetails
     *
     * @return false|string
     */

    public function exportFile(Object $jobDetails)
    {
        $encoders = [new CsvEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        return $serializer->encode($jobDetails, 'csv', array(CsvEncoder::DELIMITER_KEY => ';'));
    }
}