<?php

namespace App\Service;


class CsvExporter implements ExporterInterface
{
    /**
     * @param Object $jobDetails
     *
     * @return false|string
     */

    public function export(Object $jobDetails): string
    {
//        @todo make with serializator
//        $encoders = [new CsvEncoder()];
//        $objectNormalizer = new ObjectNormalizer();
//        $normalizers = [$objectNormalizer];
//        print_r( $objectNormalizer->normalize($jobDetails));
//        die;
//
//        $serializer = new Serializer($normalizers, $encoders);
//
//        return $serializer->encode($jobDetails, 'csv');
        return implode(",",[
            "id" => $jobDetails->getId(),
            "companyName" => $jobDetails->getCompany(),
            "description" => $jobDetails->getDescription(),
            "email" => $jobDetails->getEmail(),
        ]);
    }
    public function supportedFormat(): string
    {
        return "csv";
    }
}