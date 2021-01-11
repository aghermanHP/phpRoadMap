<?php

namespace App\Service;


class JobRatingService
{
    /**
     * @param JobDetailsService $job
     */
    public function renderJobRantingService(JobDetailsService $job)
    {
        $jobDetails = $job->RenderJobDetails();
        $ranting = $jobDetails->getType();
        return $ranting;
    }
}