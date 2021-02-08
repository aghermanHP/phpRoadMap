<?php


namespace App\Tests;

use App\Entity\Category;
use App\Entity\Job;
use App\Service\JsonExporter;
use Doctrine\DBAL\Exception;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class ExportersTest extends KernelTestCase
{
    private JsonExporter $jsonExporter;

    public function setUp(): void
    {

        $this->jsonExporter = new JsonExporter();
    }

    /**
     * @throws Exception
     *
     * @return void
     */
    public function testJsonExporterShouldReturnJson(): void
    {
        $job = $this->prepareJob();

        $exportedFile = $this->jsonExporter->export($job);
        $this->assertIsObject(json_decode($exportedFile));
    }

    public function prepareJob()
    {
//        $job = $this->createMock(Job::class);
        $category = new Category();
        $category->setId(1);
        $category->setName('full-time');

        $job = new Job();
        $job->setEmail("someEmail@email.org");
        $job->setActivated(true);
        $job->setCategory($category);
        $job->setCompany("UTM");
        $job->setDescription('this is description');
        $job->setExpiresAt(new \DateTime('now'));
        $job->setHowToApply('send cv');
        $job->setLocation('Chisinau');
        $job->setPosition('developer');
        $job->setPublic(true);
        $job->setToken('dfdsfdfdsf2323543456gdfg543');
        $job->setType('voluntary');
        $job->setId(12);

        return $job;

    }

}