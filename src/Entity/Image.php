<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $image_data = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageData(): ?string
    {
        return $this->image_data;
    }

    public function setImageData(?string $image_data): static
    {
        $this->image_data = $image_data;

        return $this;
    }
}
