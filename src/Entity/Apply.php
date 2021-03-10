<?php

namespace App\Entity;

use App\Repository\ApplyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApplyRepository::class)
 */
class Apply
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $applyDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $wishingDate;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $applyApproval;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $rentaleConfirmation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApplyDate(): ?\DateTimeInterface
    {
        return $this->applyDate;
    }

    public function setApplyDate(\DateTimeInterface $applyDate): self
    {
        $this->applyDate = $applyDate;

        return $this;
    }

    public function getWishingDate(): ?\DateTimeInterface
    {
        return $this->wishingDate;
    }

    public function setWishingDate(\DateTimeInterface $wishingDate): self
    {
        $this->wishingDate = $wishingDate;

        return $this;
    }

    public function getApplyApproval(): ?string
    {
        return $this->applyApproval;
    }

    public function setApplyApproval(string $applyApproval): self
    {
        $this->applyApproval = $applyApproval;

        return $this;
    }

    public function getRentaleConfirmation(): ?string
    {
        return $this->rentaleConfirmation;
    }

    public function setRentaleConfirmation(string $rentaleConfirmation): self
    {
        $this->rentaleConfirmation = $rentaleConfirmation;

        return $this;
    }
}
