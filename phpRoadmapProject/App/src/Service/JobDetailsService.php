<?php

namespace App\Service;


use App\Entity\Job;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Object_;


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
        return  $this->em->getRepository(Job::class)->find($jobId);
    }
}