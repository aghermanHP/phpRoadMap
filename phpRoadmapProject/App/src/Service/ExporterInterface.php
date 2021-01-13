<?php


namespace App\Service;


interface ExporterInterface
{
    /**
     * @param string $file
     * @return Mixed
     */
    public function exportFile(String $file);
}