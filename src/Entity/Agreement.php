<?php

namespace App\Entity;

use App\Repository\AgreementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgreementRepository::class)
 */
class Agreement
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
    private $creationDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $signingDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateBeginningAgreementPeriod;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEndAgreementPeriod;

    /**
     * @ORM\Column(type="integer")
     */
    private $rentaleOffLoad;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $charge;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $purchasingMode;

    /**
     * @ORM\Column(type="json")
     */
    private $purchasingDeadline = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $leadDuration;

    /**
     * @ORM\Column(type="integer")
     */
    private $constructionProvision;

    /**
     * @ORM\Column(type="integer")
     */
    private $optionalProvision;

    /**
     * @ORM\Column(type="integer")
     */
    private $additionalRent;

    /**
     * @ORM\Column(type="integer")
     */
    private $rentReferenceIndex;

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

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getSigningDate(): ?\DateTimeInterface
    {
        return $this->signingDate;
    }

    public function setSigningDate(\DateTimeInterface $signingDate): self
    {
        $this->signingDate = $signingDate;

        return $this;
    }

    public function getDateBeginningAgreementPeriod(): ?\DateTimeInterface
    {
        return $this->dateBeginningAgreementPeriod;
    }

    public function setDateBeginningAgreementPeriod(\DateTimeInterface $dateBeginningAgreementPeriod): self
    {
        $this->dateBeginningAgreementPeriod = $dateBeginningAgreementPeriod;

        return $this;
    }

    public function getDateEndAgreementPeriod(): ?\DateTimeInterface
    {
        return $this->dateEndAgreementPeriod;
    }

    public function setDateEndAgreementPeriod(\DateTimeInterface $dateEndAgreementPeriod): self
    {
        $this->dateEndAgreementPeriod = $dateEndAgreementPeriod;

        return $this;
    }

    public function getRentaleOffLoad(): ?int
    {
        return $this->rentaleOffLoad;
    }

    public function setRentaleOffLoad(int $rentaleOffLoad): self
    {
        $this->rentaleOffLoad = $rentaleOffLoad;

        return $this;
    }

    public function getCharge(): ?string
    {
        return $this->charge;
    }

    public function setCharge(string $charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getPurchasingMode(): ?string
    {
        return $this->purchasingMode;
    }

    public function setPurchasingMode(string $purchasingMode): self
    {
        $this->purchasingMode = $purchasingMode;

        return $this;
    }

    public function getPurchasingDeadline(): ?array
    {
        return $this->purchasingDeadline;
    }

    public function setPurchasingDeadline(array $purchasingDeadline): self
    {
        $this->purchasingDeadline = $purchasingDeadline;

        return $this;
    }

    public function getLeadDuration(): ?int
    {
        return $this->leadDuration;
    }

    public function setLeadDuration(int $leadDuration): self
    {
        $this->leadDuration = $leadDuration;

        return $this;
    }

    public function getConstructionProvision(): ?int
    {
        return $this->constructionProvision;
    }

    public function setConstructionProvision(int $constructionProvision): self
    {
        $this->constructionProvision = $constructionProvision;

        return $this;
    }

    public function getOptionalProvision(): ?int
    {
        return $this->optionalProvision;
    }

    public function setOptionalProvision(int $optionalProvision): self
    {
        $this->optionalProvision = $optionalProvision;

        return $this;
    }

    public function getAdditionalRent(): ?int
    {
        return $this->additionalRent;
    }

    public function setAdditionalRent(int $additionalRent): self
    {
        $this->additionalRent = $additionalRent;

        return $this;
    }

    public function getRentReferenceIndex(): ?int
    {
        return $this->rentReferenceIndex;
    }

    public function setRentReferenceIndex(int $rentReferenceIndex): self
    {
        $this->rentReferenceIndex = $rentReferenceIndex;

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
