<?php


namespace App\Message;

use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\RawMessage;

class SmsNotification implements MailerInterface
{
    private $id;
    private $description;
    private $toEmail;

    public function __construct(string $toEmail, int $id, string $description)
    {
        $this->toEmail = $toEmail;
        $this->id = $id;
        $this->description = $description;
    }

    public function getContent(): void
    {
        $this->send(
            (new Email())
                ->from("adrianJobeet@pentalog.com")
                ->to($this->toEmail)
                ->subject('Important action made')
                ->html("<h1>Hello dear client</h1><p>You maded an job with id $this->id and with this description: $this->description</p><br><a href='localhost:8001/job/$this->id'> Got to job</a>")
        );
    }
    public function send(RawMessage $message, Envelope $envelope = null): void
    {
        // TODO: Implement send() method.
    }
}