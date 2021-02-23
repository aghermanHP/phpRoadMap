<?php


namespace App\Message;


class SmsNotification
{
    private $toEmail;
    private $jobId;
    private $jobDescription;


    public function __construct(string $toEmail, int $jobId, string $jobDescription)
    {
        $this->toEmail = $toEmail;
        $this->jobId = $jobId;
        $this->jobDescription = $jobDescription;
    }

    /**
     * @return string
     */
    public function getJobDescription(): string
    {
        return $this->jobDescription;
    }

    /**
     * @return string
     */
    public function getToEmail(): string
    {
        return $this->toEmail;
    }

    /**
     * @return int
     */
    public function getJobId(): int
    {
        return $this->jobId;
    }
}
