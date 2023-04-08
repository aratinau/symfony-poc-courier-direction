<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CourierIncomingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CourierIncomingRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['courier:read']],
    denormalizationContext: ['groups' => ['courier:write']],
)]
class CourierIncoming extends Courier
{
    #[ORM\Column(length: 255)]
    #[Groups(['courier:read', 'courier:write'])]
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
