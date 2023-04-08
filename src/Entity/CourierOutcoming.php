<?php

namespace App\Entity;

use App\Repository\CourierOutcomingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourierOutcomingRepository::class)]
class CourierOutcoming extends Courier
{
    #[ORM\Column(length: 255)]
    private ?string $destinataire = null;

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(string $destinataire): self
    {
        $this->destinataire = $destinataire;

        return $this;
    }
}
