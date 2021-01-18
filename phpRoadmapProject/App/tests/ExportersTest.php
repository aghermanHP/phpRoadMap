<?php


namespace App\Tests;

use App\Entity\Job;
use App\Service\JobDetailsService;
use App\Service\JsonExporter;
use Doctrine\DBAL\Exception;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class ExportersTest extends KernelTestCase
{
    private JsonExporter $jsonExporter;
    private JobDetailsService $jobDetails;

    public function setUp()
    {

//        $this->jsonExporter = $jsonExporter;
//        $this->jobDetails = $jobDetails;
    }

    /**
     *
     * @throws Exception
     *
     * @return void
     */
    public function testJsonExporterShouldReturnJson(): void
    {

        $job = $this->jobDetails->renderJobDetails(30);
        $exportedFile = $this->jsonExporter->export($job);
        $this->assertJsonResponse($exportedFile, Response::HTTP_OK);
    }

}