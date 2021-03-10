<?php

namespace App\Entity;

use App\Repository\WorkerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorkerRepository::class)
 */
class Worker
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $corporationName;

    /**
     * @ORM\Column(type="integer")
     */
    private $companyNumber;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tradeName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $postalAdress;

    /**
     * @ORM\Column(type="integer")
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mailAdress;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $editedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deletedAt;

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCorporationName(): ?string
    {
        return $this->corporationName;
    }

    public function setCorporationName(string $corporationName): self
    {
        $this->corporationName = $corporationName;

        return $this;
    }

    public function getCompanyNumber(): ?int
    {
        return $this->companyNumber;
    }

    public function setCompanyNumber(int $companyNumber): self
    {
        $this->companyNumber = $companyNumber;

        return $this;
    }

    public function getTradeName(): ?string
    {
        return $this->tradeName;
    }

    public function setTradeName(string $tradeName): self
    {
        $this->tradeName = $tradeName;

        return $this;
    }

    public function getPostalAdress(): ?string
    {
        return $this->postalAdress;
    }

    public function setPostalAdress(string $postalAdress): self
    {
        $this->postalAdress = $postalAdress;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(int $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getMailAdress(): ?string
    {
        return $this->mailAdress;
    }

    public function setMailAdress(string $mailAdress): self
    {
        $this->mailAdress = $mailAdress;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getEditedAt(): ?\DateTimeInterface
    {
        return $this->editedAt;
    }

    public function setEditedAt(?\DateTimeInterface $editedAt): self
    {
        $this->editedAt = $editedAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

   
}
