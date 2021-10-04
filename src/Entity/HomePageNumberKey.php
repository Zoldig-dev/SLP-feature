<?php

namespace App\Entity;

use App\Repository\HomePageNumberKeyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomePageNumberKeyRepository::class)
 */
class HomePageNumberKey
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
    private $productNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $storeNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $packageNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductNumber(): ?int
    {
        return $this->productNumber;
    }

    public function setProductNumber(int $productNumber): self
    {
        $this->productNumber = $productNumber;

        return $this;
    }

    public function getStoreNumber(): ?int
    {
        return $this->storeNumber;
    }

    public function setStoreNumber(int $storeNumber): self
    {
        $this->storeNumber = $storeNumber;

        return $this;
    }

    public function getPackageNumber(): ?int
    {
        return $this->packageNumber;
    }

    public function setPackageNumber(int $packageNumber): self
    {
        $this->packageNumber = $packageNumber;

        return $this;
    }
}
