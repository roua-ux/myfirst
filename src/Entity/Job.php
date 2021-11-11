<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 */
class Job
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isactivated;

    /**
     * @ORM\Column(type="datetime")
     */
    private $expriesal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTille(): ?string
    {
        return $this->tille;
    }

    public function setTille(string $tille): self
    {
        $this->tille = $tille;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIsactivated(): ?bool
    {
        return $this->isactivated;
    }

    public function setIsactivated(bool $isactivated): self
    {
        $this->isactivated = $isactivated;

        return $this;
    }

    public function getExpriesal(): ?\DateTimeInterface
    {
        return $this->expriesal;
    }

    public function setExpriesal(\DateTimeInterface $expriesal): self
    {
        $this->expriesal = $expriesal;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
