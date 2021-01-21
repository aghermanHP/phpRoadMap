<?php


namespace App\Transformer;


use App\DTO\JobDTO;
use App\Entity\Job;

class JobTransformer
{
    /**
     * @param  Job $job
     */
    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    /**
     * @return JobDTO
     */
    public function transformJob(): JobDTO
    {
        $dto = new JobDTO();

//      @fixme entity <-> dto transforming should be done in a separated class -> JobTransformer
//        @todo

        $dto->public = $this->job->ispublic();
        $dto->category = $this->job->getCategory();
        $dto->activated = $this->job->isActivated();
        $dto->company = $this->job->getCompany();
        $dto->createdAt = $this->job->getCreatedAt();
        $dto->description = $this->job->getDescription();
        $dto->email = $this->job->getEmail();
        $dto->expiresAt = $this->job->getExpiresAt();
        $dto->howToApply = $this->job->getHowToApply();
        $dto->id = $this->job->getId();
        $dto->location = $this->job->getLocation();
        $dto->logo = $this->job->getLogo();
        $dto->position = $this->job->getPosition();
        $dto->token = $this->job->getToken();
        $dto->type = $this->job->getType();
        $dto->updatedAt = $this->job->getUpdatedAt();
        $dto->url = $this->job->getUrl();
        return $dto;
    }

}