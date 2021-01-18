<?php

namespace App\Service;


use App\Entity\Job;
use App\Transformer\JobTransformer;
use Doctrine\ORM\EntityManagerInterface;


class JobDetailsService
{
    /** @var string */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param int $jobId
     *
     * @return object
     */
    public function renderJobDetails(int $jobId) : object
    {
        $jobEntity = $this->em->getRepository(Job::class)->find($jobId);
        $jobTransformer = new JobTransformer($jobEntity);
        return $jobTransformer->transformJob();


    }
}