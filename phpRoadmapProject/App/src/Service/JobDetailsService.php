<?php

namespace App\Service;


use App\DTO\JobDTO;
use App\Entity\Job;
use Doctrine\ORM\EntityManagerInterface;


class JobDetailsService
{
    /** @var string */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param int $jobId
     *
     * @return object
     */
    public function renderJobDetails(int $jobId) : object
    {
        $jobEntity = $this->em->getRepository(Job::class)->find($jobId);
        $dto = new JobDTO();
        $dto->public = $jobEntity->ispublic();
        $dto->category = $jobEntity->getCategory();
        $dto->activated = $jobEntity->isActivated();
        $dto->company = $jobEntity->getCompany();
        $dto->createdAt = $jobEntity->getCreatedAt();
        $dto->description = $jobEntity->getDescription();
        $dto->email = $jobEntity->getEmail();
        $dto->expiresAt = $jobEntity->getExpiresAt();
        $dto->howToApply = $jobEntity->getHowToApply();
        $dto->id = $jobEntity->getId();
        $dto->location = $jobEntity->getLocation();
        $dto->logo = $jobEntity->getLogo();
        $dto->position = $jobEntity->getPosition();
        $dto->token = $jobEntity->getToken();
        $dto->type = $jobEntity->getType();
        $dto->updatedAt = $jobEntity->getUpdatedAt();
        $dto->url = $jobEntity->getUrl();
        return $dto;


    }
}