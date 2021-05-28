<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfileType
 *
 * @ORM\Table(name="profile_type")
 * @ORM\Entity(repositoryClass="App\Repository\ProfileTypeRepository")
 */
class ProfileType
{
    /**
     * @var int
     *
     * @ORM\Column(name="profile_type_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profileTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="i18n", type="string", length=255, nullable=true)
     */
    private $i18n;

    public function getProfileTypeId(): ?int
    {
        return $this->profileTypeId;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getI18n(): ?string
    {
        return $this->i18n;
    }

    public function setI18n(?string $i18n): self
    {
        $this->i18n = $i18n;

        return $this;
    }


}
