<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CourierOutcomingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CourierOutcomingRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['courier:read']],
    denormalizationContext: ['groups' => ['courier:write']],
)]
class CourierOutcoming extends Courier
{
    #[ORM\Column(length: 255)]
    #[Groups(['courier:read', 'courier:write'])]
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
