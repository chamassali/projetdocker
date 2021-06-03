<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfileParameter
 *
 * @ORM\Table(name="profile_parameter", indexes={@ORM\Index(name="profil_parameter_fk_currency_id", columns={"fk_currency_id"}), @ORM\Index(name="profil_parameter_fk_language_id", columns={"fk_language_id"}), @ORM\Index(name="profil_parameter_fk_profil_id", columns={"fk_profil_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Profile\ProfileParameterRepository")
 */
class ProfileParameter
{
    /**
     * @var int
     *
     * @ORM\Column(name="profile_parameter", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profileParameter;

    /**
     * @var json|null
     *
     * @ORM\Column(name="push_notification", type="json", nullable=true)
     */
    private $pushNotification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geo_hash5", type="string", length=5, nullable=true)
     */
    private $geoHash5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geo_name", type="string", length=255, nullable=true, options={"comment"="il est possible que cela soit en cache et non conservÃ© en bdd"})
     */
    private $geoName;

    /**
     * @var float|null
     *
     * @ORM\Column(name="teleprompter_speed", type="float", precision=2, scale=0, nullable=true)
     */
    private $teleprompterSpeed;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_currency_id", referencedColumnName="currency_id")
     * })
     */
    private $fkCurrency;

    /**
     * @var \Language
     *
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_language_id", referencedColumnName="language_id")
     * })
     */
    private $fkLanguage;

    /**
     * @var \Profile
     *
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_profil_id", referencedColumnName="profil_id")
     * })
     */
    private $fkProfil;

    public function getProfileParameter(): ?int
    {
        return $this->profileParameter;
    }

    public function getPushNotification(): ?array
    {
        return $this->pushNotification;
    }

    public function setPushNotification(?array $pushNotification): self
    {
        $this->pushNotification = $pushNotification;

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

    public function getTeleprompterSpeed(): ?float
    {
        return $this->teleprompterSpeed;
    }

    public function setTeleprompterSpeed(?float $teleprompterSpeed): self
    {
        $this->teleprompterSpeed = $teleprompterSpeed;

        return $this;
    }

    public function getFkCurrency(): ?Currency
    {
        return $this->fkCurrency;
    }

    public function setFkCurrency(?Currency $fkCurrency): self
    {
        $this->fkCurrency = $fkCurrency;

        return $this;
    }

    public function getFkLanguage(): ?Language
    {
        return $this->fkLanguage;
    }

    public function setFkLanguage(?Language $fkLanguage): self
    {
        $this->fkLanguage = $fkLanguage;

        return $this;
    }

    public function getFkProfil(): ?Profile
    {
        return $this->fkProfil;
    }

    public function setFkProfil(?Profile $fkProfil): self
    {
        $this->fkProfil = $fkProfil;

        return $this;
    }


}
