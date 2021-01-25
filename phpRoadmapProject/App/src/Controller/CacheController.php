<?php


namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Component\Routing\Annotation\Route;

class CacheController  extends AbstractController
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
     * CacheController constructor.
     * @param CacheInterface $cache
     * @param EntityManagerInterface $em
     */
    public function __construct(CacheInterface $cache, EntityManagerInterface $em)
    {
        $this->cache = $cache;
        $this->em = $em;
    }

    /**
     * Export File
     *
     *
     * @Route("/somthing")
     *
     * @return Response
     */
    public function getContacts(): Response
    {
        return $this->cache->get("page.contacts", function () {
            sleep(10);
            return new Response(serialize(new Response("Somthing")));
        });

    }


}