<?php

namespace App\Entity\Project;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterviewType
 *
 * @ORM\Table(name="interview_type")
 * @ORM\Entity(repositoryClass="App\Repository\Project\InterviewtypeRepository")
 */
class InterviewType
{
    /**
     * @var int
     *
     * @ORM\Column(name="interview_type_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $interviewTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_interview_type", type="integer", nullable=true)
     */
    private $rankInterviewType;

    public function getInterviewTypeId(): ?string
    {
        return $this->interviewTypeId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRankInterviewType(): ?int
    {
        return $this->rankInterviewType;
    }

    public function setRankInterviewType(?int $rankInterviewType): self
    {
        $this->rankInterviewType = $rankInterviewType;

        return $this;
    }


}
