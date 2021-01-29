<?php


namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Psr\Cache\InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Cache\CacheItemPoolInterface;

class Psr6Controller extends AbstractController
{
    /**
     * @var CacheItemPoolInterface
     */
    private CacheItemPoolInterface $cache;

    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * JobController constructor.
     * @param CacheItemPoolInterface $cache
     * @param EntityManagerInterface $em
     */
    public function __construct(CacheItemPoolInterface $cache, EntityManagerInterface $em)
    {
        $this->cache = $cache;
        $this->em = $em;
    }

    /**
     * @Route("/psrcache")
     * @return Response
     * @throws InvalidArgumentException
     */
    public function psrMethod(): Response
    {
        $cachedTemplate = $this->cache->getItem("psr6_caching_method");
        $cachedTemplate->set($this->render('test/test.html.twig'));
        $this->cache->save($cachedTemplate);

        $this->cache->getitem('psr6_caching_method');
        return $cachedTemplate->get();
    }

    /**
     * @Route("/template")
     * @return Response
     * @throws InvalidArgumentException
     */
    public function getTemplate(): Response
    {
        $cachedTemplate = $this->cache->getItem("psr6_caching_method");
        $cachedTemplate->set($this->render('test/testTemplate.hml.twig'));
        $this->cache->save($cachedTemplate);

        $this->cache->getitem('psr6_caching_method');
        return $cachedTemplate->get();
    }

}