<?php

namespace App\Entity;

use App\Repository\PropertyFileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PropertyFileRepository::class)
 */
class PropertyFile
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
    private $energyPerformanceCertificate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diagnosisElectricityAndGas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diagnosisLead;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $condominiumRule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $inventoryFirstView;

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
    private $DeletedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnergyPerformanceCertificate(): ?string
    {
        return $this->energyPerformanceCertificate;
    }

    public function setEnergyPerformanceCertificate(string $energyPerformanceCertificate): self
    {
        $this->energyPerformanceCertificate = $energyPerformanceCertificate;

        return $this;
    }

    public function getDiagnosisElectricityAndGas(): ?string
    {
        return $this->diagnosisElectricityAndGas;
    }

    public function setDiagnosisElectricityAndGas(string $diagnosisElectricityAndGas): self
    {
        $this->diagnosisElectricityAndGas = $diagnosisElectricityAndGas;

        return $this;
    }

    public function getDiagnosisLead(): ?string
    {
        return $this->diagnosisLead;
    }

    public function setDiagnosisLead(string $diagnosisLead): self
    {
        $this->diagnosisLead = $diagnosisLead;

        return $this;
    }

    public function getCondominiumRule(): ?string
    {
        return $this->condominiumRule;
    }

    public function setCondominiumRule(string $condominiumRule): self
    {
        $this->condominiumRule = $condominiumRule;

        return $this;
    }

    public function getInventoryFirstView(): ?string
    {
        return $this->inventoryFirstView;
    }

    public function setInventoryFirstView(string $inventoryFirstView): self
    {
        $this->inventoryFirstView = $inventoryFirstView;

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
        return $this->DeletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $DeletedAt): self
    {
        $this->DeletedAt = $DeletedAt;

        return $this;
    }
}
