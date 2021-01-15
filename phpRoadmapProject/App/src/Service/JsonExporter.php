<?php

namespace App\Service;

use JsonException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class JsonExporter implements ExporterInterface
{
    /**
     * @param Object $jobDetails
     *
     * @throws JsonException
     * @return false|string
     */
    public function exportFile(Object $jobDetails)
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        return $serializer->encode($jobDetails, 'json');
    }
}