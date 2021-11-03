<?php

namespace App\Entity;

use App\Repository\SliderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass=SliderRepository::class)
 */
class Slider
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
    private $name;

    /**
     * @Vich\UploadableField(mapping="Slider_image", fileNameProperty="name")
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="slider")
     */
    private $images;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

//    public function __toString(){
//        return $this->name;
//    }

/**
 * @return Collection|Image[]
 */
public function getImages(): Collection
{
    return $this->images;
}

public function addImage(Image $image): self
{
    if (!$this->images->contains($image)) {
        $this->images[] = $image;
        $image->setSlider($this);
    }

    return $this;
}

public function removeImage(Image $image): self
{
    if ($this->images->removeElement($image)) {
        // set the owning side to null (unless already changed)
        if ($image->getSlider() === $this) {
            $image->setSlider(null);
        }
    }

    return $this;
}
}
