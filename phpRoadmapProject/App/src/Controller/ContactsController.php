<?php


namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\ItemInterface;


class ContactsController extends AbstractController
{
    /**
     * @var CacheInterface
     */
    private CacheInterface $cache;

    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * JobController constructor.
     * @param CacheInterface $cache
     * @param EntityManagerInterface $em
     */
    public function __construct(CacheInterface $cache, EntityManagerInterface $em)
    {
        $this->cache = $cache;
        $this->em = $em;
    }

    /**
     * @Route("/contacts")
     * @throws \Psr\Cache\InvalidArgumentException
     * @return Response
     */
    public function getContactList(): Response
    {
        return $this->cache->get('jobs.contacts.cache', function (ItemInterface $item) {
            $item->expiresAfter(60);

            return $this->render('contacts/contacts.html.twig');
        });
    }
}
