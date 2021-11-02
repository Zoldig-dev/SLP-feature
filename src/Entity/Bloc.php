<?php

namespace App\Entity;

use App\Repository\BlocRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Vich\Uploadable
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @Vich\UploadableField(mapping="Bloc_image", fileNameProperty="path")
     * @var File|null
     */
    private $imageFile;

    /**
     * @Vich\UploadableField(mapping="Bloc_image", fileNameProperty="path2")
     * @var File|null
     */
    private $imageFile2;

    /**
     * @Vich\UploadableField(mapping="Bloc_image", fileNameProperty="backgroud")
     * @var File|null
     */
    private $imageFile3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $backgroud;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $path2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content6;

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

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile2(?File $imageFile2 = null): void
    {
        $this->imageFile2 = $imageFile2;
    }

    public function getImageFile2(): ?File
    {
        return $this->imageFile2;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getBackgroud(): ?string
    {
        return $this->backgroud;
    }

    public function setBackgroud(?string $backgroud): self
    {
        $this->backgroud = $backgroud;

        return $this;
    }

    public function getPath2(): ?string
    {
        return $this->path2;
    }

    public function setPath2(?string $path2): self
    {
        $this->path2 = $path2;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->description2;
    }

    public function setDescription2(?string $description2): self
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getContent2(): ?string
    {
        return $this->content2;
    }

    public function setContent2(?string $content2): self
    {
        $this->content2 = $content2;

        return $this;
    }

    public function getContent3(): ?string
    {
        return $this->content3;
    }

    public function setContent3(?string $content3): self
    {
        $this->content3 = $content3;

        return $this;
    }

    public function getContent4(): ?string
    {
        return $this->content4;
    }

    public function setContent4(?string $content4): self
    {
        $this->content4 = $content4;

        return $this;
    }

    public function getContent5(): ?string
    {
        return $this->content5;
    }

    public function setContent5(?string $content5): self
    {
        $this->content5 = $content5;

        return $this;
    }

    public function getContent6(): ?string
    {
        return $this->content6;
    }

    public function setContent6(?string $content6): self
    {
        $this->content6 = $content6;

        return $this;
    }

    /**
     * Get the value of imageFile3
     *
     * @return  File|null
     */ 
    public function getImageFile3()
    {
        return $this->imageFile3;
    }

    /**
     * Set the value of imageFile3
     *
     * @param  File|null  $imageFile3
     *
     * @return  self
     */ 
    public function setImageFile3($imageFile3)
    {
        $this->imageFile3 = $imageFile3;

        return $this;
    }
}