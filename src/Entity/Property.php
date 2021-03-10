<?php

namespace App\Entity;

use App\Repository\PropertyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PropertyRepository::class)
 */
class Property
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="integer")
     */
    private $roomNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $bedroomNumber;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $storey;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $charges;

    /**
     * @ORM\Column(type="datetime")
     */
    private $availabilityDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="boolean")
     */
    private $rentalLine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @ORM\Column(type="integer")
     */
    private $bail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $monoproperty;

    /**
     * @ORM\Column(type="boolean")
     */
    private $indicationWaterState;

    /**
     * @ORM\Column(type="boolean")
     */
    private $fiber;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tnt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baleTv;

    /**
     * @ORM\Column(type="boolean")
     */
    private $indicatorHeaterState;

    /**
     * @ORM\Column(type="integer")
     */
    private $batchNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $rentaleReference;

    /**
     * @ORM\Column(type="boolean")
     */
    private $provisionCharges;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $greenHouse;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $energyPerformanceCertificate;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $postaCode;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $telephoneNumberShowOff;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $amoutInsurranceColocation;

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

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getRoomNumber(): ?int
    {
        return $this->roomNumber;
    }

    public function setRoomNumber(int $roomNumber): self
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    public function getBedroomNumber(): ?int
    {
        return $this->bedroomNumber;
    }

    public function setBedroomNumber(int $bedroomNumber): self
    {
        $this->bedroomNumber = $bedroomNumber;

        return $this;
    }

    public function getStorey(): ?string
    {
        return $this->storey;
    }

    public function setStorey(string $storey): self
    {
        $this->storey = $storey;

        return $this;
    }

    public function getCharges(): ?string
    {
        return $this->charges;
    }

    public function setCharges(string $charges): self
    {
        $this->charges = $charges;

        return $this;
    }

    public function getAvailabilityDate(): ?\DateTimeInterface
    {
        return $this->availabilityDate;
    }

    public function setAvailabilityDate(\DateTimeInterface $availabilityDate): self
    {
        $this->availabilityDate = $availabilityDate;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getRentalLine(): ?bool
    {
        return $this->rentalLine;
    }

    public function setRentalLine(bool $rentalLine): self
    {
        $this->rentalLine = $rentalLine;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getBail(): ?int
    {
        return $this->bail;
    }

    public function setBail(int $bail): self
    {
        $this->bail = $bail;

        return $this;
    }

    public function getMonoproperty(): ?bool
    {
        return $this->monoproperty;
    }

    public function setMonoproperty(bool $monoproperty): self
    {
        $this->monoproperty = $monoproperty;

        return $this;
    }

    public function getIndicationWaterState(): ?bool
    {
        return $this->indicationWaterState;
    }

    public function setIndicationWaterState(bool $indicationWaterState): self
    {
        $this->indicationWaterState = $indicationWaterState;

        return $this;
    }

    public function getFiber(): ?bool
    {
        return $this->fiber;
    }

    public function setFiber(bool $fiber): self
    {
        $this->fiber = $fiber;

        return $this;
    }

    public function getTnt(): ?bool
    {
        return $this->tnt;
    }

    public function setTnt(bool $tnt): self
    {
        $this->tnt = $tnt;

        return $this;
    }

    public function getBaleTv(): ?bool
    {
        return $this->baleTv;
    }

    public function setBaleTv(bool $baleTv): self
    {
        $this->baleTv = $baleTv;

        return $this;
    }

    public function getIndicatorHeaterState(): ?bool
    {
        return $this->indicatorHeaterState;
    }

    public function setIndicatorHeaterState(bool $indicatorHeaterState): self
    {
        $this->indicatorHeaterState = $indicatorHeaterState;

        return $this;
    }

    public function getBatchNumber(): ?int
    {
        return $this->batchNumber;
    }

    public function setBatchNumber(int $batchNumber): self
    {
        $this->batchNumber = $batchNumber;

        return $this;
    }

    public function getRentaleReference(): ?int
    {
        return $this->rentaleReference;
    }

    public function setRentaleReference(int $rentaleReference): self
    {
        $this->rentaleReference = $rentaleReference;

        return $this;
    }

    public function getProvisionCharges(): ?bool
    {
        return $this->provisionCharges;
    }

    public function setProvisionCharges(bool $provisionCharges): self
    {
        $this->provisionCharges = $provisionCharges;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getGreenHouse(): ?string
    {
        return $this->greenHouse;
    }

    public function setGreenHouse(string $greenHouse): self
    {
        $this->greenHouse = $greenHouse;

        return $this;
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

    public function getPostaCode(): ?string
    {
        return $this->postaCode;
    }

    public function setPostaCode(string $postaCode): self
    {
        $this->postaCode = $postaCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

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

    public function getTelephoneNumberShowOff(): ?string
    {
        return $this->telephoneNumberShowOff;
    }

    public function setTelephoneNumberShowOff(string $telephoneNumberShowOff): self
    {
        $this->telephoneNumberShowOff = $telephoneNumberShowOff;

        return $this;
    }

    public function getAmoutInsurranceColocation(): ?string
    {
        return $this->amoutInsurranceColocation;
    }

    public function setAmoutInsurranceColocation(string $amoutInsurranceColocation): self
    {
        $this->amoutInsurranceColocation = $amoutInsurranceColocation;

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
