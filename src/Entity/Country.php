<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 */
class Country
{
    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="continent", type="string", length=255, nullable=true)
     */
    private $continent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iso2", type="string", length=3, nullable=true)
     */
    private $iso2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iso3", type="string", length=3, nullable=true)
     */
    private $iso3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geohash3", type="text", length=0, nullable=true)
     */
    private $geohash3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geohash4", type="text", length=0, nullable=true)
     */
    private $geohash4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geohash5", type="text", length=0, nullable=true)
     */
    private $geohash5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_currency_id", type="integer", nullable=true, options={"comment"="La valeur utilisÃ©e par dÃ©faut, pour toutes les monnaies il faut passer par la table country_currency"})
     */
    private $fkCurrencyId;

    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    public function getContinent(): ?string
    {
        return $this->continent;
    }

    public function setContinent(?string $continent): self
    {
        $this->continent = $continent;

        return $this;
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

    public function getIso2(): ?string
    {
        return $this->iso2;
    }

    public function setIso2(?string $iso2): self
    {
        $this->iso2 = $iso2;

        return $this;
    }

    public function getIso3(): ?string
    {
        return $this->iso3;
    }

    public function setIso3(?string $iso3): self
    {
        $this->iso3 = $iso3;

        return $this;
    }

    public function getGeohash3(): ?string
    {
        return $this->geohash3;
    }

    public function setGeohash3(?string $geohash3): self
    {
        $this->geohash3 = $geohash3;

        return $this;
    }

    public function getGeohash4(): ?string
    {
        return $this->geohash4;
    }

    public function setGeohash4(?string $geohash4): self
    {
        $this->geohash4 = $geohash4;

        return $this;
    }

    public function getGeohash5(): ?string
    {
        return $this->geohash5;
    }

    public function setGeohash5(?string $geohash5): self
    {
        $this->geohash5 = $geohash5;

        return $this;
    }

    public function getFkCurrencyId(): ?int
    {
        return $this->fkCurrencyId;
    }

    public function setFkCurrencyId(?int $fkCurrencyId): self
    {
        $this->fkCurrencyId = $fkCurrencyId;

        return $this;
    }


}
