<?php

namespace App\Service;


class ExporterFactory
{
    private array $exporters;

    /**
     * ExporterFactory constructor.
     * @param iterable|ExporterInterface[] $exporters
     */
    public function __construct( iterable $exporters = [])
    {
        foreach ($exporters as $exporter){
            $this->exporters[$exporter->supportedFormat()] = $exporter;
        }
    }

    /**
     * @param string $format
     *
     * @return ExporterInterface
     */
    public function buildExport(string $format): ExporterInterface
    {
        if (!isset($this->exporters[$format])){
            throw new \LogicException("Format '$format' is not supported");
        }
     return $this->exporters[$format];
    }
}