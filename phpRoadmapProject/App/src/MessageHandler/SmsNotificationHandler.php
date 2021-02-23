<?php


namespace App\MessageHandler;

use App\Message\SmsNotification;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class SmsNotificationHandler implements MessageHandlerInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(SmsNotification $message)
    {
        $id = $message->getJobId();
        $description = $message->getJobDescription();
        $email = (new TemplatedEmail())
            ->from('Jobeet@pentalog.com')
            ->to($message->getToEmail())
            ->subject('Job on Jobeet platform where created')
            ->html("
                            <h1> 
                                A job with id: 
                                <p style='color: red'> $id </p> 
                                and with description: 
                                <p style='color: red'> $description </p>
                                 where created
                            </h1>
                            <a href='localhost:8001/job/$id'>go to the job</a>
                         ");

        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            dd($e);
        }
//        $this->mailer->send($email);
    }
}
