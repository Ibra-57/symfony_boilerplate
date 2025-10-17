<?php

namespace App\Entity;

use App\Repository\SaucesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SaucesRepository::class)]
class Sauces
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $gout_sauce = null;

    #[ORM\Column]
    private ?int $id_sauce = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGoutSauce(): ?string
    {
        return $this->gout_sauce;
    }

    public function setGoutSauce(string $gout_sauce): static
    {
        $this->gout_sauce = $gout_sauce;

        return $this;
    }

    public function getIdSauce(): ?int
    {
        return $this->id_sauce;
    }

    public function setIdSauce(int $id_sauce): static
    {
        $this->id_sauce = $id_sauce;

        return $this;
    }
}
