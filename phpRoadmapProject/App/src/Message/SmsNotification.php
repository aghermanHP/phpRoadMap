<?php


namespace App\Message;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

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
        $this->mailer->send(
            (new Email())
                ->from("adrianJobeet@pentalog.com")
                ->to($this->toEmail)
                ->subject('Important action made')
                ->html("<h1>Hello dear client</h1><p>You maded an job with id $this->id and with this description: $this->description</p><br><a href='localhost:8001/job/$this->id'> Got to job</a>")
        );
    }
}