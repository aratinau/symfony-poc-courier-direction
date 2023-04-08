<?php

namespace App\Entity;

use App\Repository\CourierIncomingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourierIncomingRepository::class)]
class CourierIncoming
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $expediteur = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'courierIncomings')]
    private Collection $destinataires;

    public function __construct()
    {
        $this->destinataires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExpediteur(): ?string
    {
        return $this->expediteur;
    }

    public function setExpediteur(string $expediteur): self
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getDestinataires(): Collection
    {
        return $this->destinataires;
    }

    public function addDestinataire(User $destinataire): self
    {
        if (!$this->destinataires->contains($destinataire)) {
            $this->destinataires->add($destinataire);
        }

        return $this;
    }

    public function removeDestinataire(User $destinataire): self
    {
        $this->destinataires->removeElement($destinataire);

        return $this;
    }
}
