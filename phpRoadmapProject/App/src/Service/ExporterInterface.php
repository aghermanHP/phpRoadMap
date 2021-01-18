<?php


namespace App\Service;



interface ExporterInterface
{
    /**
     * @param object $jobDetails
     *
     * @return Mixed
     */
    public function export(object $jobDetails): string;
    public function supportedFormat(): string;
}