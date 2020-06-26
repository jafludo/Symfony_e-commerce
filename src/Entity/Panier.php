<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Utilisateur::class, inversedBy="panier", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Utilisateur;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_Achat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->Utilisateur;
    }

    public function setUtilisateur(Utilisateur $Utilisateur): self
    {
        $this->Utilisateur = $Utilisateur;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->Date_Achat;
    }

    public function setDateAchat(?\DateTimeInterface $Date_Achat): self
    {
        $this->Date_Achat = $Date_Achat;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->Etat;
    }

    public function setEtat(bool $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }
}
