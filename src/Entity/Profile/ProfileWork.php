<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfileWork
 *
 * @ORM\Table(name="profile_work")
 * @ORM\Entity(repositoryClass="App\Repository\Profile\ProfileWorkRepository")
 */
class ProfileWork
{
    /**
     * @var int
     *
     * @ORM\Column(name="profil_work_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profilWorkId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    public function getProfilWorkId(): ?int
    {
        return $this->profilWorkId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
