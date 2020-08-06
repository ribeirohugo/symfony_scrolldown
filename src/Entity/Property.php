<?php namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Property
 *
 * @ORM\Table(name="property")
 * @ORM\Entity
 */
class Property
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isFeatured", type="boolean", nullable=true)
     */
    private $isfeatured;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location", type="integer", nullable=true)
     */
    private $location;

    /**
     * @var float|null
     *
     * @ORM\Column(name="lowestPricePerNight", type="float", precision=10, scale=0, nullable=true)
     */
    private $lowestpricepernight;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIsfeatured(): ?bool
    {
        return $this->isfeatured;
    }

    public function setIsfeatured(?bool $isfeatured): self
    {
        $this->isfeatured = $isfeatured;

        return $this;
    }

    public function getLocation(): ?int
    {
        return $this->location;
    }

    public function setLocation(?int $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getLowestpricepernight(): ?float
    {
        return $this->lowestpricepernight;
    }

    public function setLowestpricepernight(?float $lowestpricepernight): self
    {
        $this->lowestpricepernight = $lowestpricepernight;

        return $this;
    }


}
