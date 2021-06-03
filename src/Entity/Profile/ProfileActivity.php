<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;
use Twig\Profiler\Profile;

/**
 * ProfileActivity
 *
 * @ORM\Table(name="profile_activity", indexes={@ORM\Index(name="profil_activity_fk_profil_id", columns={"fk_profil_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Profile\ProfileActivityRepository")
 */
class ProfileActivity
{
    /**
     * @var int
     *
     * @ORM\Column(name="profile_activity_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profileActivityId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_activity", type="datetime", nullable=true)
     */
    private $lastActivity;

    /**
     * @var \Profile
     *
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_profil_id", referencedColumnName="profil_id")
     * })
     */
    private $fkProfil;

    public function getProfileActivityId(): ?int
    {
        return $this->profileActivityId;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getLastActivity(): ?\DateTimeInterface
    {
        return $this->lastActivity;
    }

    public function setLastActivity(?\DateTimeInterface $lastActivity): self
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    public function getFkProfil(): ?Profile
    {
        return $this->fkProfil;
    }

    public function setFkProfil(?Profile $fkProfil): self
    {
        $this->fkProfil = $fkProfil;

        return $this;
    }


}
