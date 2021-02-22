<?php


namespace App\Service;


use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SendMail
{
    public function sendAnEmail (MailerInterface $mailer, string $from, string $to, string $subject, string $body) {
        $mailer->send(
            (new Email())
                ->from($from)
                ->to($to)
                ->subject($subject)
                ->html($body)
        );
    }
}