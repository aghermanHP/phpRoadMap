<?php


namespace App\Service;


use App\Entity\Job;

interface ExporterInterface
{
    /**
     * @param JobDetailsService $jobDetails
     *
     * @return Mixed
     */
    public function exportFile(JobDetailsService $jobDetails);
}