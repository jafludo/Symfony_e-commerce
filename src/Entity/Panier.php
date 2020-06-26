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

    /**
     * @ORM\OneToOne(targetEntity=ContenuPanier::class, mappedBy="Panier", cascade={"persist", "remove"})
     */
    private $Quantite;

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

    public function getQuantite(): ?ContenuPanier
    {
        return $this->Quantite;
    }

    public function setQuantite(?ContenuPanier $Quantite): self
    {
        $this->Quantite = $Quantite;

        // set (or unset) the owning side of the relation if necessary
        $newPanier = null === $Quantite ? null : $this;
        if ($Quantite->getPanier() !== $newPanier) {
            $Quantite->setPanier($newPanier);
        }

        return $this;
    }
}
