<?php

namespace App\Service;

use App\DTO\JobDTO;
use JsonException;


class JsonExporter implements ExporterInterface
{
    /**
     * @param Object|JobDTO $jobDetails
     *
     * @return false|string
     */
    public function export(object $jobDetails): string
    {
//        @fixme implement with serialiser
//        $encoders = [new JsonEncoder()];
//        $normalizers = [new ObjectNormalizer()];
//
//        $serializer = new Serializer($normalizers, $encoders);
//
//        return $serializer->encode($jobDetails, 'json', ["groups"=>["export"]]);

        return json_encode([
            "id" => $jobDetails->getId(),
            "companyName" => $jobDetails->getCompany(),
            "description" => $jobDetails->getDescription(),
            "email" => $jobDetails->getEmail(),
            "How to apply" => $jobDetails->getHowToApply(),
            "Location" => $jobDetails->getLocation(),
        ]);
    }
    public function supportedFormat(): string
    {
        return "json";
    }
}