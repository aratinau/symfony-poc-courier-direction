<?php

namespace App\Entity;

use App\Repository\CourierOutcomingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourierOutcomingRepository::class)]
class CourierOutcoming
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $destinataire = null;

    #[ORM\ManyToOne(inversedBy: 'courierOutcomings')]
    private ?User $expediteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(string $destinataire): self
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    public function getExpediteur(): ?User
    {
        return $this->expediteur;
    }

    public function setExpediteur(?User $expediteur): self
    {
        $this->expediteur = $expediteur;

        return $this;
    }
}
