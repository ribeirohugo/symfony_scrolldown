<?php



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


}
