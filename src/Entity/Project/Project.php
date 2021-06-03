<?php

namespace App\Entity\Project;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project", indexes={@ORM\Index(name="project_fk_interview_id", columns={"fk_interview_id"}), @ORM\Index(name="project_fk_profile_id", columns={"fk_profile_id"}), @ORM\Index(name="project_fk_project_type", columns={"fk_search_type_id"}), @ORM\Index(name="project_state", columns={"state"})})
 * @ORM\Entity(repositoryClass="App\Repository\Project\Project")
 */
class Project
{
    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="text", length=16777215, nullable=true, options={"comment"="Un projet peut juste être du texte sans video à publier."})
     */
    private $summary;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var json|null
     *
     * @ORM\Column(name="tag", type="json", nullable=true, options={"comment"="mots clés du projet ou le job/freelance recherché"})
     */
    private $tag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="media", type="string", length=255, nullable=true, options={"comment"="Chemin (hors url base) du media complet généré"})
     */
    private $media;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var json|null
     *
     * @ORM\Column(name="geo", type="json", nullable=true, options={"comment"="nom du lieu de recherche"})
     */
    private $geo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search", type="string", length=255, nullable=true, options={"comment"="phrase complète de sa recherche ""recherche d'investisseurs dans le milieu du textile"""})
     */
    private $search;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_title", type="string", length=255, nullable=true)
     */
    private $searchTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="search_price", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $searchPrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help_media", type="string", length=255, nullable=true, options={"comment"="chemin vers media d'aide son/video. Pas i18n pour le moment"})
     */
    private $helpMedia;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_profile_id", type="bigint", nullable=false)
     */
    private $fkProfileId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geo_hash5", type="string", length=5, nullable=true)
     */
    private $geoHash5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geo_name", type="string", length=255, nullable=true, options={"comment"="il est possible que cela soit en cache et non conservé en bdd"})
     */
    private $geoName;

    /**
     * @var \Interview
     *
     * @ORM\ManyToOne(targetEntity="Interview")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_interview_id", referencedColumnName="interview_id")
     * })
     */
    private $fkInterview;

    /**
     * @var \SearchType
     *
     * @ORM\ManyToOne(targetEntity="SearchType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_search_type_id", referencedColumnName="search_type_id")
     * })
     */
    private $fkSearchType;

    public function getProjectId(): ?string
    {
        return $this->projectId;
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

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

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

    public function getTag(): ?array
    {
        return $this->tag;
    }

    public function setTag(?array $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(?string $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getGeo(): ?array
    {
        return $this->geo;
    }

    public function setGeo(?array $geo): self
    {
        $this->geo = $geo;

        return $this;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(?string $search): self
    {
        $this->search = $search;

        return $this;
    }

    public function getSearchTitle(): ?string
    {
        return $this->searchTitle;
    }

    public function setSearchTitle(?string $searchTitle): self
    {
        $this->searchTitle = $searchTitle;

        return $this;
    }

    public function getSearchPrice(): ?string
    {
        return $this->searchPrice;
    }

    public function setSearchPrice(?string $searchPrice): self
    {
        $this->searchPrice = $searchPrice;

        return $this;
    }

    public function getHelpMedia(): ?string
    {
        return $this->helpMedia;
    }

    public function setHelpMedia(?string $helpMedia): self
    {
        $this->helpMedia = $helpMedia;

        return $this;
    }

    public function getFkProfileId(): ?string
    {
        return $this->fkProfileId;
    }

    public function setFkProfileId(string $fkProfileId): self
    {
        $this->fkProfileId = $fkProfileId;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(?int $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getGeoHash5(): ?string
    {
        return $this->geoHash5;
    }

    public function setGeoHash5(?string $geoHash5): self
    {
        $this->geoHash5 = $geoHash5;

        return $this;
    }

    public function getGeoName(): ?string
    {
        return $this->geoName;
    }

    public function setGeoName(?string $geoName): self
    {
        $this->geoName = $geoName;

        return $this;
    }

    public function getFkInterview(): ?Interview
    {
        return $this->fkInterview;
    }

    public function setFkInterview(?Interview $fkInterview): self
    {
        $this->fkInterview = $fkInterview;

        return $this;
    }

    public function getFkSearchType(): ?SearchType
    {
        return $this->fkSearchType;
    }

    public function setFkSearchType(?SearchType $fkSearchType): self
    {
        $this->fkSearchType = $fkSearchType;

        return $this;
    }


}
