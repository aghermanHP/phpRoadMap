<?php


namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;


class MailerController extends AbstractController
{
    /**
     * @Route("/email")
     */
    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new TemplatedEmail())
            ->from('hello@example.com')
            ->to('you@example.com')
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->attachFromPath(__DIR__."/test.txt", 'Privacy Policy')
            ->htmlTemplate("test/testTemplate.html.twig");
//            ->html('<p>See Twig integration for better HTML integration!</p>');s
//        $email->getHeaders()->addTextHeader('X-transport','alternative');


        try {
            $mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            dd($e);
        }
        return new Response(' ', Response::HTTP_OK);

    }
}