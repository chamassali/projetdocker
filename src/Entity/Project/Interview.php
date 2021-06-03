<?php

namespace App\Entity\Project;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interview
 *
 * @ORM\Table(name="interview", indexes={@ORM\Index(name="fk_profile_id", columns={"fk_profile_id"}), @ORM\Index(name="interview_fk_interview_type", columns={"fk_interview_type_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Project\InterviewRepository")
 */
class Interview
{
    /**
     * @var int
     *
     * @ORM\Column(name="interview_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $interviewId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=true)
     */
    private $summary;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_profile_id", type="bigint", nullable=true, options={"unsigned"=true,"comment"="Si l'id est 1. Les interviews nous appartiennent. Sinon interview perso"})
     */
    private $fkProfileId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help_media", type="string", length=255, nullable=true, options={"comment"="video ou son d'explication de cette interview fr/en/autres"})
     */
    private $helpMedia;

    /**
     * @var string
     *
     * @ORM\Column(name="i18n_name", type="string", length=255, nullable=false)
     */
    private $i18nName;

    /**
     * @var string
     *
     * @ORM\Column(name="i18n_summary", type="string", length=255, nullable=false)
     */
    private $i18nSummary;

    /**
     * @var \InterviewType
     *
     * @ORM\ManyToOne(targetEntity="InterviewType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_interview_type_id", referencedColumnName="interview_type_id")
     * })
     */
    private $fkInterviewType;

    public function getInterviewId(): ?string
    {
        return $this->interviewId;
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

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getFkProfileId(): ?string
    {
        return $this->fkProfileId;
    }

    public function setFkProfileId(?string $fkProfileId): self
    {
        $this->fkProfileId = $fkProfileId;

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

    public function getI18nName(): ?string
    {
        return $this->i18nName;
    }

    public function setI18nName(string $i18nName): self
    {
        $this->i18nName = $i18nName;

        return $this;
    }

    public function getI18nSummary(): ?string
    {
        return $this->i18nSummary;
    }

    public function setI18nSummary(string $i18nSummary): self
    {
        $this->i18nSummary = $i18nSummary;

        return $this;
    }

    public function getFkInterviewType(): ?InterviewType
    {
        return $this->fkInterviewType;
    }

    public function setFkInterviewType(?InterviewType $fkInterviewType): self
    {
        $this->fkInterviewType = $fkInterviewType;

        return $this;
    }


}
