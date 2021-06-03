<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfileState
 *
 * @ORM\Table(name="profile_state")
 * @ORM\Entity(repositoryClass="App\Repository\Profile\ProfileStateRepository")
 */
class ProfileState
{
    /**
     * @var int
     *
     * @ORM\Column(name="profile_state_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profileStateId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    public function getProfileStateId(): ?int
    {
        return $this->profileStateId;
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
