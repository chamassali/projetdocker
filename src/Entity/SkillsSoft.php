<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillsSoft
 *
 * @ORM\Table(name="skills_soft")
 * @ORM\Entity(repositoryClass="App\Repository\SkillsSoftRepository")
 */
class SkillsSoft
{
    /**
     * @var int
     *
     * @ORM\Column(name="skills_soft_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skillsSoftId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_category_id", type="integer", nullable=true)
     */
    private $fkCategoryId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank", type="integer", nullable=true, options={"default"="1"})
     */
    private $rank = 1;

    public function getSkillsSoftId(): ?int
    {
        return $this->skillsSoftId;
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

    public function getFkCategoryId(): ?int
    {
        return $this->fkCategoryId;
    }

    public function setFkCategoryId(?int $fkCategoryId): self
    {
        $this->fkCategoryId = $fkCategoryId;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(?int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }


}
