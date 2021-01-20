<?php


namespace App\Service;


use App\Entity\Job;

interface ExporterInterface
{
    /**
     * @param Job $jobDetails
     *
     * @return Mixed
     */
    public function export(Job $jobDetails): string;
    public function supportedFormat(): string;
}