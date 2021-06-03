<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillsSoftCategory
 *
 * @ORM\Table(name="skills_soft_category")
 * @ORM\Entity(repositoryClass="App\Repository\Profile\SkillsSoftCategoryRepository")
 */
class SkillsSoftCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="skills_soft_category_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skillsSoftCategoryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank", type="integer", nullable=true, options={"default"="1"})
     */
    private $rank = 1;

    public function getSkillsSoftCategoryId(): ?int
    {
        return $this->skillsSoftCategoryId;
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
