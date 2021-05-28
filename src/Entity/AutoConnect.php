<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutoConnect
 *
 * @ORM\Table(name="auto_connect", indexes={@ORM\Index(name="auto_connect_fk_profil_id", columns={"fk_profil_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\AutoConnectRepository")
 */
class AutoConnect
{
    /**
     * @var int
     *
     * @ORM\Column(name="autoconnect_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $autoconnectId;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"comment"="Mettre Ã  la main CURRENT_TIMESTAMP par defaut"})
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true, options={"comment"="Mettre Ã  la main CURRENT_TIMESTAMP par defaut"})
     */
    private $updatedAt;

    /**
     * @var \Profile
     *
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_profil_id", referencedColumnName="profil_id")
     * })
     */
    private $fkProfil;

    public function getAutoconnectId(): ?int
    {
        return $this->autoconnectId;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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
