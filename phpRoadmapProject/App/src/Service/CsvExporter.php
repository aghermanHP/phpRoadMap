<?php

namespace App\Service;


use App\Entity\Job;
use JsonException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CsvExporter implements ExporterInterface
{
    /**
     * @param Object $jobDetails
     *
     * @throws \JsonException
     * @return false|string
     */

    public function exportFile(Object $jobDetails)
    {
        $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder()]);
        return $serializer->encode($jobDetails, 'csv');
    }
}