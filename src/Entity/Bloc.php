<?php

namespace App\Entity;

use App\Repository\BlocRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlocRepository::class)
 */
class Bloc
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $content;

    /**
     * @ORM\Column(type="integer")
     */
    private $orderList;

    /**
     * @ORM\ManyToOne(targetEntity=PageCustom::class, inversedBy="bloc")
     */
    private $pageCustom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getOrderList(): ?int
    {
        return $this->orderList;
    }

    public function setOrderList(int $orderList): self
    {
        $this->orderList = $orderList;

        return $this;
    }

    public function getPageCustom(): ?PageCustom
    {
        return $this->pageCustom;
    }

    public function setPageCustom(?PageCustom $pageCustom): self
    {
        $this->pageCustom = $pageCustom;

        return $this;
    }
}
