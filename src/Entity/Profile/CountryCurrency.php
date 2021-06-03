<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * CountryCurrency
 * @ORM\Table(name="country_currency", indexes={@ORM\Index(name="country_currency_fk_country_id", columns={"fk_country_id"}), @ORM\Index(name="country_currency_fk_currency_id", columns={"fk_currency_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Profile\CountryCurrencysRepository")
 */
class CountryCurrency
{
    /**
     * @var int
     *
     * @ORM\Column(name="country_currency_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryCurrencyId;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_country_id", referencedColumnName="country_id")
     * })
     */
    private $fkCountry;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_currency_id", referencedColumnName="currency_id")
     * })
     */
    private $fkCurrency;

    public function getCountryCurrencyId(): ?int
    {
        return $this->countryCurrencyId;
    }

    public function getFkCountry(): ?Country
    {
        return $this->fkCountry;
    }

    public function setFkCountry(?Country $fkCountry): self
    {
        $this->fkCountry = $fkCountry;

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


}
