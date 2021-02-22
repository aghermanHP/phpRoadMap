<?php


namespace App\Message;

use App\Service\SendMail;
use Symfony\Component\Mailer\MailerInterface;

class SmsNotification
{
    private $id;
    private $description;
    private $mailer;
    private $toEmail;

    public function __construct(string $toEmail, int $id, string $description, MailerInterface $mailer)
    {
        $this->toEmail = $toEmail;
        $this->id = $id;
        $this->description = $description;
        $this->mailer = $mailer;
    }

    public function getContent(): void
    {
        $from = "adrianJobeet@pentalog.com";
        $subject = "were created new job on jobeet";
        $body = "<h1>Hello dear client</h1><p>You maded an job with id $this->id and with this description: $this->description</p><br><a href='localhost:8001/job/$this->id'> Got to job</a>";

        $mailerService = new SendMail();

        $mailerService->sendAnEmail($this->mailer, $from, $this->toEmail, $subject, $body);
    }
}