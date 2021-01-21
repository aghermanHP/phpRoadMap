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
     * @param Job $job
     *
     * @return object
     */
    public function renderJobDetails(Job  $job) : object
    {
        $jobTransformer = new JobTransformer($job);
        return $jobTransformer->transformJob();


    }
}