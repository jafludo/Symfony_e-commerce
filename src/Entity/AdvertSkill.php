<?php

namespace App\Entity;

use App\Repository\AdvertSkillRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdvertSkillRepository::class)
 */
class AdvertSkill
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $level;

    /**
     * @ORM\ManyToOne(targetEntity=Advert::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $advert;

    /**
     * @ORM\ManyToOne(targetEntity=Skill::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $skill;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getAdvert()
    {
        return $this->advert;
    }

    public function setAdvert(Advert $advert)
    {
        $this->advert = $advert;
    }

    public function getSkill()  {
        return $this->skill;
    }

    public function setSkill(Skill $skill)
    {
        $this->skill = $skill;
    }
}
