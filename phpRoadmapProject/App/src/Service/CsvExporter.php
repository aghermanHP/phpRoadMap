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
            "id" => $jobDetails->id,
            "companyName" => $jobDetails->company,
            "description" => $jobDetails->description,
            "email" => $jobDetails->email,
        ]);
    }
    public function supportedFormat(): string
    {
        return "csv";
    }
}