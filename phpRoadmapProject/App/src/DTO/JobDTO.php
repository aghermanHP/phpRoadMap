<?php

declare(strict_types=1);

namespace App\DTO;

use App\Entity\Category;
use JMS\Serializer\Annotation as JMS;

class JobDTO
{
    /**
     * @var int
     *
     * @JMS
     */
    public $id;

    /**
     * @var string
     *
     * @JMS
     */
    public $type;

    /**
     * @var string
     *
     * @JMS
     */
    public $company;

    /**
     * @var string|null
     *
     * @JMS
     */
    public $logo;

    /**
     * @var string|null
     *
     * @JMS
     */
    public $url;

    /**
     * @var string
     *
     * @JMS
     */
    public $position;

    /**
     * @var string
     *
     * @JMS
     */
    public $location;

    /**
     * @var string
     *
     * @JMS
     */
    public $description;

    /**
     * @var string
     *
     * @JMS
     */
    public $howToApply;

    /**
     * @var string
     *
     * @JMS
     */
    public $token;

    /**
     * @var bool
     *
     * @JMS
     */
    public $public;

    /**
     * @var bool
     *
     * @JMS
     */
    public $activated;

    /**
     * @var string
     *
     * @JMS
     */
    public $email;

    /**
     * @var \DateTime
     *
     * @JMS
     */
    public $expiresAt;

    /**
     * @var \DateTime
     *
     * @JMS
     */
    public $createdAt;

    /**
     * @var \DateTime
     *
     * @JMS
     */
    public $updatedAt;

    /**
     * @var Category
     *
     * @JMS
     */
    public $category;

    public const FULL_TIME_TYPE = 'full-time';
    public const PART_TIME_TYPE = 'part-time';
    public const FREELANCE_TYPE = 'freelance';

    public const TYPES = [
        self::FULL_TIME_TYPE,
        self::PART_TIME_TYPE,
        self::FREELANCE_TYPE,
    ];
}