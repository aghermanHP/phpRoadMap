<?php


namespace App\Tests;

use App\Entity\Job;
use App\Service\JobDetailsService;
use App\Service\JsonExporter;
use Doctrine\DBAL\Exception;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;


class ExportersTest extends TestCase
{
    /**
     * @param JobDetailsService $jobDetails
     * @param JsonExporter $jsonExporter
     *
     * @throws Exception
     *
     * @return void
     */
    public function testJsonExporterShouldReturnJson(JsonExporter $jsonExporter, JobDetailsService $jobDetails): void
    {

        $job = $jobDetails->renderJobDetails(30);
        $exportedFile = $jsonExporter->exportFile($job);
        $this->assertJsonResponse($exportedFile, Response::HTTP_OK);
    }

}