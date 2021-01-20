<?php


namespace App\Transformer;


use App\DTO\JobDTO;
use App\Entity\Job;

class JobTransformer
{
    /**
     * @param Job $job
     *
     * @return JobDTO
     */
    public function transformJob(Job $job): JobDTO
    {
        $dto = new JobDTO();

        $dto->public = $job->ispublic();
        $dto->category = $job->getCategory();
        $dto->activated = $job->isActivated();
        $dto->company = $job->getCompany();
        $dto->createdAt = $job->getCreatedAt();
        $dto->description = $job->getDescription();
        $dto->email = $job->getEmail();
        $dto->expiresAt = $job->getExpiresAt();
        $dto->howToApply = $job->getHowToApply();
        $dto->id = $job->getId();
        $dto->location = $job->getLocation();
        $dto->logo = $job->getLogo();
        $dto->position = $job->getPosition();
        $dto->token = $job->getToken();
        $dto->type = $job->getType();
        $dto->updatedAt = $job->getUpdatedAt();
        $dto->url = $job->getUrl();
        return $dto;
    }

}