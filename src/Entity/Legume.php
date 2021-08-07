<?php

namespace App\Entity;

use App\Repository\LegumeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LegumeRepository::class)
 */
class Legume
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $legumeName;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $genus;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $family;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $imageFile;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $carbohydrates;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $protein;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $fat;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $sugar;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $fiber;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $calories;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInJanuary;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInFebruary;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInMarch;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInApril;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInMay;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInJune;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInJuly;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInAugust;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInSeptember;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInOctober;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInNovember;

    /**
     * @ORM\Column(type="boolean")
     */
    private $harvestedInDecember;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $createdBy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLegumeName(): ?string
    {
        return $this->legumeName;
    }

    public function setLegumeName(string $legumeName): self
    {
        $this->legumeName = $legumeName;

        return $this;
    }

    public function getGenus(): ?string
    {
        return $this->genus;
    }

    public function setGenus(string $genus): self
    {
        $this->genus = $genus;

        return $this;
    }

    public function getFamily(): ?string
    {
        return $this->family;
    }

    public function setFamily(string $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getImageFile(): ?string
    {
        return $this->imageFile;
    }

    public function setImageFile(string $imageFile): self
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    public function getCarbohydrates(): ?string
    {
        return $this->carbohydrates;
    }

    public function setCarbohydrates(string $carbohydrates): self
    {
        $this->carbohydrates = $carbohydrates;

        return $this;
    }

    public function getProtein(): ?string
    {
        return $this->protein;
    }

    public function setProtein(string $protein): self
    {
        $this->protein = $protein;

        return $this;
    }

    public function getFat(): ?string
    {
        return $this->fat;
    }

    public function setFat(string $fat): self
    {
        $this->fat = $fat;

        return $this;
    }

    public function getSugar(): ?string
    {
        return $this->sugar;
    }

    public function setSugar(string $sugar): self
    {
        $this->sugar = $sugar;

        return $this;
    }

    public function getFiber(): ?string
    {
        return $this->fiber;
    }

    public function setFiber(string $fiber): self
    {
        $this->fiber = $fiber;

        return $this;
    }

    public function getCalories(): ?string
    {
        return $this->calories;
    }

    public function setCalories(string $calories): self
    {
        $this->calories = $calories;

        return $this;
    }

    public function getHarvestedInJanuary(): ?bool
    {
        return $this->harvestedInJanuary;
    }

    public function setHarvestedInJanuary(bool $harvestedInJanuary): self
    {
        $this->harvestedInJanuary = $harvestedInJanuary;

        return $this;
    }

    public function getHarvestedInFebruary(): ?bool
    {
        return $this->harvestedInFebruary;
    }

    public function setHarvestedInFebruary(bool $harvestedInFebruary): self
    {
        $this->harvestedInFebruary = $harvestedInFebruary;

        return $this;
    }

    public function getHarvestedInMarch(): ?bool
    {
        return $this->harvestedInMarch;
    }

    public function setHarvestedInMarch(bool $harvestedInMarch): self
    {
        $this->harvestedInMarch = $harvestedInMarch;

        return $this;
    }

    public function getHarvestedInApril(): ?bool
    {
        return $this->harvestedInApril;
    }

    public function setHarvestedInApril(bool $harvestedInApril): self
    {
        $this->harvestedInApril = $harvestedInApril;

        return $this;
    }

    public function getHarvestedInMay(): ?bool
    {
        return $this->harvestedInMay;
    }

    public function setHarvestedInMay(bool $harvestedInMay): self
    {
        $this->harvestedInMay = $harvestedInMay;

        return $this;
    }

    public function getHarvestedInJune(): ?bool
    {
        return $this->harvestedInJune;
    }

    public function setHarvestedInJune(bool $harvestedInJune): self
    {
        $this->harvestedInJune = $harvestedInJune;

        return $this;
    }

    public function getHarvestedInJuly(): ?bool
    {
        return $this->harvestedInJuly;
    }

    public function setHarvestedInJuly(bool $harvestedInJuly): self
    {
        $this->harvestedInJuly = $harvestedInJuly;

        return $this;
    }

    public function getHarvestedInAugust(): ?bool
    {
        return $this->harvestedInAugust;
    }

    public function setHarvestedInAugust(bool $harvestedInAugust): self
    {
        $this->harvestedInAugust = $harvestedInAugust;

        return $this;
    }

    public function getHarvestedInSeptember(): ?bool
    {
        return $this->harvestedInSeptember;
    }

    public function setHarvestedInSeptember(bool $harvestedInSeptember): self
    {
        $this->harvestedInSeptember = $harvestedInSeptember;

        return $this;
    }

    public function getHarvestedInOctober(): ?bool
    {
        return $this->harvestedInOctober;
    }

    public function setHarvestedInOctober(bool $harvestedInOctober): self
    {
        $this->harvestedInOctober = $harvestedInOctober;

        return $this;
    }

    public function getHarvestedInNovember(): ?bool
    {
        return $this->harvestedInNovember;
    }

    public function setHarvestedInNovember(bool $harvestedInNovember): self
    {
        $this->harvestedInNovember = $harvestedInNovember;

        return $this;
    }

    public function getHarvestedInDecember(): ?bool
    {
        return $this->harvestedInDecember;
    }

    public function setHarvestedInDecember(bool $harvestedInDecember): self
    {
        $this->harvestedInDecember = $harvestedInDecember;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }
}
