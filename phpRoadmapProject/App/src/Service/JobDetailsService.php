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
     * @var JobTransformer
     */
    private JobTransformer $jobTransformer;

    /**
     * @param EntityManagerInterface $em
     * @param JobTransformer $jobTransformer
     */
    public function __construct(EntityManagerInterface $em, JobTransformer $jobTransformer)
    {
        $this->em = $em;
        $this->jobTransformer = $jobTransformer;
    }

    /**
     * @param int $jobId
     *
     * @return object
     */
    public function renderJobDetails(int $jobId) : object
    {
        $jobEntity = $this->em->getRepository(Job::class)->find($jobId);
        return $this->jobTransformer->transformJob($jobEntity);
    }
}
