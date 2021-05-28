<?php

namespace App\Entity;

use App\Entity\PriceUnit;
use App\Entity\ProfileType;
use App\Entity\ProfileState;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Profile
 *
 * @ORM\Table(name="profile", indexes={@ORM\Index(name="profil_fk_price_unit", columns={"fk_price_unit"}), @ORM\Index(name="profil_fk_study_level", columns={"fk_study_level"}), @ORM\Index(name="profile_fk_profile_state", columns={"fk_profile_state"}), @ORM\Index(name="profile_fk_profile_type", columns={"fk_profile_type"}), @ORM\Index(name="profile_fk_work_type", columns={"fk_work_type"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProfileRepository")
 */
class Profile
{
    /**
     * @var int
     *
     * @ORM\Column(name="profil_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profilId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true, options={"comment"="empreinte du password"})
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true, options={"comment"="Encryption du password"})
     */
    private $salt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="job_actual", type="string", length=255, nullable=true)
     */
    private $jobActual;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diploma", type="string", length=255, nullable=true, options={"comment"="Nom du dernier diplome obtenu"})
     */
    private $diploma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="experience_current", type="integer", nullable=true, options={"comment"="Nombre d'annÃ©e dans le travail actuel"})
     */
    private $experienceCurrent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="experience_global", type="integer", nullable=true, options={"comment"="Nombre d'annÃ©e depuis la fin des Ã©tudes"})
     */
    private $experienceGlobal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="string", length=3000, nullable=true)
     */
    private $summary;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=2, nullable=true)
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_id", type="string", length=255, nullable=true)
     */
    private $externalId;

    /**
     * @var json|null
     *
     * @ORM\Column(name="skills_soft", type="json", nullable=true)
     */
    private $skillsSoft;

    /**
     * @var json|null
     *
     * @ORM\Column(name="skills_hard", type="json", nullable=true)
     */
    private $skillsHard;

    /**
     * @var json|null
     *
     * @ORM\Column(name="skills_hard_training", type="json", nullable=true)
     */
    private $skillsHardTraining;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var \PriceUnit
     *
     * @ORM\ManyToOne(targetEntity="PriceUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_price_unit", referencedColumnName="price_unit_id")
     * })
     */
    private $fkPriceUnit;

    /**
     * @var \ProfileState
     *
     * @ORM\ManyToOne(targetEntity="ProfileState")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_profile_state", referencedColumnName="profile_state_id")
     * })
     */
    private $fkProfileState;

    /**
     * @var \ProfileType
     *
     * @ORM\ManyToOne(targetEntity="ProfileType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_profile_type", referencedColumnName="profile_type_id")
     * })
     */
    private $fkProfileType;

    /**
     * @var \StudyLevel
     *
     * @ORM\ManyToOne(targetEntity="StudyLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_study_level", referencedColumnName="study_id")
     * })
     */
    private $fkStudyLevel;

    /**
     * @var \ProfileWork
     *
     * @ORM\ManyToOne(targetEntity="ProfileWork")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_work_type", referencedColumnName="profil_work_id")
     * })
     */
    private $fkWorkType;

    public function getProfilId(): ?string
    {
        return $this->profilId;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getJobActual(): ?string
    {
        return $this->jobActual;
    }

    public function setJobActual(?string $jobActual): self
    {
        $this->jobActual = $jobActual;

        return $this;
    }

    public function getDiploma(): ?string
    {
        return $this->diploma;
    }

    public function setDiploma(?string $diploma): self
    {
        $this->diploma = $diploma;

        return $this;
    }

    public function getExperienceCurrent(): ?int
    {
        return $this->experienceCurrent;
    }

    public function setExperienceCurrent(?int $experienceCurrent): self
    {
        $this->experienceCurrent = $experienceCurrent;

        return $this;
    }

    public function getExperienceGlobal(): ?int
    {
        return $this->experienceGlobal;
    }

    public function setExperienceGlobal(?int $experienceGlobal): self
    {
        $this->experienceGlobal = $experienceGlobal;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getSkillsSoft(): ?array
    {
        return $this->skillsSoft;
    }

    public function setSkillsSoft(?array $skillsSoft): self
    {
        $this->skillsSoft = $skillsSoft;

        return $this;
    }

    public function getSkillsHard(): ?array
    {
        return $this->skillsHard;
    }

    public function setSkillsHard(?array $skillsHard): self
    {
        $this->skillsHard = $skillsHard;

        return $this;
    }

    public function getSkillsHardTraining(): ?array
    {
        return $this->skillsHardTraining;
    }

    public function setSkillsHardTraining(?array $skillsHardTraining): self
    {
        $this->skillsHardTraining = $skillsHardTraining;

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

    public function getFkPriceUnit(): ?PriceUnit
    {
        return $this->fkPriceUnit;
    }

    public function setFkPriceUnit(?PriceUnit $fkPriceUnit): self
    {
        $this->fkPriceUnit = $fkPriceUnit;

        return $this;
    }

    public function getFkProfileState(): ?ProfileState
    {
        return $this->fkProfileState;
    }

    public function setFkProfileState(?ProfileState $fkProfileState): self
    {
        $this->fkProfileState = $fkProfileState;

        return $this;
    }

    public function getFkProfileType(): ?ProfileType
    {
        return $this->fkProfileType;
    }

    public function setFkProfileType(?ProfileType $fkProfileType): self
    {
        $this->fkProfileType = $fkProfileType;

        return $this;
    }

    public function getFkStudyLevel(): ?StudyLevel
    {
        return $this->fkStudyLevel;
    }

    public function setFkStudyLevel(?StudyLevel $fkStudyLevel): self
    {
        $this->fkStudyLevel = $fkStudyLevel;

        return $this;
    }

    public function getFkWorkType(): ?ProfileWork
    {
        return $this->fkWorkType;
    }

    public function setFkWorkType(?ProfileWork $fkWorkType): self
    {
        $this->fkWorkType = $fkWorkType;

        return $this;
    }


}
