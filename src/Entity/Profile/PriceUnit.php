<?php

namespace App\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceUnit
 *
 * @ORM\Table(name="price_unit")
 * @ORM\Entity(repositoryClass="App\Repository\Profile\PriceUnitRepository")
 */
class PriceUnit
{
    /**
     * @var int
     *
     * @ORM\Column(name="price_unit_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $priceUnitId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    public function getPriceUnitId(): ?int
    {
        return $this->priceUnitId;
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
