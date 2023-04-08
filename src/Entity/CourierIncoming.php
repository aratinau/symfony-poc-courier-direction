<?php

namespace App\Entity;

use App\Repository\CourierIncomingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourierIncomingRepository::class)]
class CourierIncoming extends Courier
{
    #[ORM\Column(length: 255)]
    private ?string $expediteur = null;

    public function getExpediteur(): ?string
    {
        return $this->expediteur;
    }

    public function setExpediteur(string $expediteur): self
    {
        $this->expediteur = $expediteur;

        return $this;
    }
}
