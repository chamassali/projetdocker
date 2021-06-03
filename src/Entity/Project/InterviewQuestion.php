<?php

namespace App\Entity\Project;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterviewQuestion
 *
 * @ORM\Table(name="interview_question", indexes={@ORM\Index(name="interview_question_fk_interview_id", columns={"fk_interview_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Project\InterviewQuestionRepository")
 */
class InterviewQuestion
{
    /**
     * @var int
     *
     * @ORM\Column(name="interview_question_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $interviewQuestionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true)
     */
    private $question;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_before", type="integer", nullable=true, options={"default"="10","comment"="en seconde"})
     */
    private $timeBefore = 10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_record", type="integer", nullable=true, options={"default"="40"})
     */
    private $timeRecord = 40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_question_interview", type="integer", nullable=true)
     */
    private $rankQuestionInterview;

    /**
     * @var string
     *
     * @ORM\Column(name="i18n", type="string", length=256, nullable=false)
     */
    private $i18n;

    /**
     * @var \Interview
     *
     * @ORM\ManyToOne(targetEntity="Interview")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_interview_id", referencedColumnName="interview_id")
     * })
     */
    private $fkInterview;

    public function getInterviewQuestionId(): ?string
    {
        return $this->interviewQuestionId;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getTimeBefore(): ?int
    {
        return $this->timeBefore;
    }

    public function setTimeBefore(?int $timeBefore): self
    {
        $this->timeBefore = $timeBefore;

        return $this;
    }

    public function getTimeRecord(): ?int
    {
        return $this->timeRecord;
    }

    public function setTimeRecord(?int $timeRecord): self
    {
        $this->timeRecord = $timeRecord;

        return $this;
    }

    public function getRankQuestionInterview(): ?int
    {
        return $this->rankQuestionInterview;
    }

    public function setRankQuestionInterview(?int $rankQuestionInterview): self
    {
        $this->rankQuestionInterview = $rankQuestionInterview;

        return $this;
    }

    public function getI18n(): ?string
    {
        return $this->i18n;
    }

    public function setI18n(string $i18n): self
    {
        $this->i18n = $i18n;

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


}
