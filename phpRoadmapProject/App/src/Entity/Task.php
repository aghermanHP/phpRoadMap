<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

class Task
{
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $task;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $dueDate;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $token;

    private $image_path;

    private $webPath;

    public function getTask(): string
    {
        return $this->task;
    }

    public function setTask(string $task): void
    {
        $this->task = $task;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(?\DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getImagePath()
    {
        return $this->image_path;
    }

    /**
     * @param mixed $image_path
     */
    public function setImagePath($image_path): void
    {
        $this->image_path = $image_path;
    }

    /**
     * @return mixed
     */
    public function getWebPath()
    {
        return $this->webPath;
    }

    /**
     * @param mixed $webPath
     */
    public function setWebPath($webPath): void
    {
        $this->webPath = $webPath;
    }
}