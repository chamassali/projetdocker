<?php

namespace App\Entity\Project;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectQuestion
 *
 * @ORM\Table(name="project_question", indexes={@ORM\Index(name="project_question_fk_project_id", columns={"fk_project_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Project\ProjectQuestion")
 */
class ProjectQuestion
{
    /**
     * @var int
     *
     * @ORM\Column(name="project_question_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectQuestionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="media_source", type="string", length=255, nullable=true, options={"comment"="source video envoyée par le téléphone"})
     */
    private $mediaSource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="media_target", type="string", length=255, nullable=true, options={"comment"="Element travaillé par les script/IA"})
     */
    private $mediaTarget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help_media", type="string", length=255, nullable=true)
     */
    private $helpMedia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_project_question", type="integer", nullable=true)
     */
    private $rankProjectQuestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_start", type="string", length=255, nullable=true, options={"comment"="V2 : Vu la taille des video, il n'est pas util de préciser la seconde exacte."})
     */
    private $textStart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_middle", type="string", length=255, nullable=true, options={"comment"="v2 : Information à afficher au milieu de la video"})
     */
    private $textMiddle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_end", type="string", length=255, nullable=true, options={"comment"="V2 : information à afficher à la fin de la video"})
     */
    private $textEnd;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_project_id", referencedColumnName="project_id")
     * })
     */
    private $fkProject;

    public function getProjectQuestionId(): ?string
    {
        return $this->projectQuestionId;
    }

    public function getMediaSource(): ?string
    {
        return $this->mediaSource;
    }

    public function setMediaSource(?string $mediaSource): self
    {
        $this->mediaSource = $mediaSource;

        return $this;
    }

    public function getMediaTarget(): ?string
    {
        return $this->mediaTarget;
    }

    public function setMediaTarget(?string $mediaTarget): self
    {
        $this->mediaTarget = $mediaTarget;

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

    public function getRankProjectQuestion(): ?int
    {
        return $this->rankProjectQuestion;
    }

    public function setRankProjectQuestion(?int $rankProjectQuestion): self
    {
        $this->rankProjectQuestion = $rankProjectQuestion;

        return $this;
    }

    public function getTextStart(): ?string
    {
        return $this->textStart;
    }

    public function setTextStart(?string $textStart): self
    {
        $this->textStart = $textStart;

        return $this;
    }

    public function getTextMiddle(): ?string
    {
        return $this->textMiddle;
    }

    public function setTextMiddle(?string $textMiddle): self
    {
        $this->textMiddle = $textMiddle;

        return $this;
    }

    public function getTextEnd(): ?string
    {
        return $this->textEnd;
    }

    public function setTextEnd(?string $textEnd): self
    {
        $this->textEnd = $textEnd;

        return $this;
    }

    public function getFkProject(): ?Project
    {
        return $this->fkProject;
    }

    public function setFkProject(?Project $fkProject): self
    {
        $this->fkProject = $fkProject;

        return $this;
    }


}
