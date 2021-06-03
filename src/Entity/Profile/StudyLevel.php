<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudyLevel
 *
 * @ORM\Table(name="study_level")
 * @ORM\Entity(repositoryClass="App\Repository\Profile\StudyLevelRepository")
 */
class StudyLevel
{
    /**
     * @var int
     *
     * @ORM\Column(name="study_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $studyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_us", type="string", length=255, nullable=true)
     */
    private $nameUs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_euro", type="string", length=255, nullable=true)
     */
    private $nameEuro;

    /**
     * @var int|null
     *
     * @ORM\Column(name="us_level", type="integer", nullable=true)
     */
    private $usLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="euro_level", type="integer", nullable=true)
     */
    private $euroLevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="high_level", type="boolean", nullable=true)
     */
    private $highLevel;

    public function getStudyId(): ?int
    {
        return $this->studyId;
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

    public function getNameUs(): ?string
    {
        return $this->nameUs;
    }

    public function setNameUs(?string $nameUs): self
    {
        $this->nameUs = $nameUs;

        return $this;
    }

    public function getNameEuro(): ?string
    {
        return $this->nameEuro;
    }

    public function setNameEuro(?string $nameEuro): self
    {
        $this->nameEuro = $nameEuro;

        return $this;
    }

    public function getUsLevel(): ?int
    {
        return $this->usLevel;
    }

    public function setUsLevel(?int $usLevel): self
    {
        $this->usLevel = $usLevel;

        return $this;
    }

    public function getEuroLevel(): ?int
    {
        return $this->euroLevel;
    }

    public function setEuroLevel(?int $euroLevel): self
    {
        $this->euroLevel = $euroLevel;

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

    public function getHighLevel(): ?bool
    {
        return $this->highLevel;
    }

    public function setHighLevel(?bool $highLevel): self
    {
        $this->highLevel = $highLevel;

        return $this;
    }


}
