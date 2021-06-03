<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 *
 * @ORM\Table(name="group")
 * @ORM\Entity(repositoryClass="App\Repository\Profile\GroupRepository")
 */
class Group
{
    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_profil_id", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $fkProfilId;

    /**
     * @var json|null
     *
     * @ORM\Column(name="members", type="json", nullable=true)
     */
    private $members;

    public function getGroupId(): ?string
    {
        return $this->groupId;
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

    public function getFkProfilId(): ?string
    {
        return $this->fkProfilId;
    }

    public function setFkProfilId(?string $fkProfilId): self
    {
        $this->fkProfilId = $fkProfilId;

        return $this;
    }

    public function getMembers(): ?array
    {
        return $this->members;
    }

    public function setMembers(?array $members): self
    {
        $this->members = $members;

        return $this;
    }


}
