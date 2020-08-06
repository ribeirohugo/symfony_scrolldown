<?php namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OverallRating
 *
 * @ORM\Table(name="overall_rating")
 * @ORM\Entity
 */
class OverallRating
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="overall", type="float", precision=10, scale=0, nullable=true)
     */
    private $overall;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numberOfRatings", type="integer", nullable=true)
     */
    private $numberofratings;

    /**
     * @var \Property
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Property")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getOverall(): ?float
    {
        return $this->overall;
    }

    public function setOverall(?float $overall): self
    {
        $this->overall = $overall;

        return $this;
    }

    public function getNumberofratings(): ?int
    {
        return $this->numberofratings;
    }

    public function setNumberofratings(?int $numberofratings): self
    {
        $this->numberofratings = $numberofratings;

        return $this;
    }

    public function getId(): ?Property
    {
        return $this->id;
    }

    public function setId(?Property $id): self
    {
        $this->id = $id;

        return $this;
    }


}
