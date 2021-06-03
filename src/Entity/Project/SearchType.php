<?php

namespace App\Entity\Project;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchType
 *
 * @ORM\Table(name="search_type")
 * @ORM\Entity(repositoryClass="App\Repository\Project\SearchType")
 */
class SearchType
{
    /**
     * @var int
     *
     * @ORM\Column(name="search_type_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $searchTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    public function getSearchTypeId(): ?int
    {
        return $this->searchTypeId;
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
