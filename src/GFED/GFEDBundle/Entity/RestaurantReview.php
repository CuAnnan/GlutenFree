<?php
namespace GFED\GFEDBundle\Entity;
/* 
 * Restaurants are being handled such that all restaurants are chains, even if they are chains with only one branch.
 */
use Doctrine\ORM\Mapping as ORM;
/** 
 * @ORM\Entity
 */
class RestaurantReview
{
	/**
     * @ORM\Column(type="integer", length=190)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="RestaurantBranch")
	 * @ORM\JoinColumn(name="restaurant_branch_id", referencedColumnName="id")
	 */
	protected $restaurantBranch;
	
	/**
	 * @ORM\OneToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
	 */
	protected $user;
	
	/**
	 * @ORM\Column(type="integer", length=1)
	 */
	protected $rating;
	
	/**
	 * @ORM\Column(type="text")
	 */
	protected $text;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return RestaurantReview
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return RestaurantReview
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set restaurantBranch
     *
     * @param \GFED\GFEDBundle\Entity\RestaurantBranch $restaurantBranch
     *
     * @return RestaurantReview
     */
    public function setRestaurantBranch(\GFED\GFEDBundle\Entity\RestaurantBranch $restaurantBranch = null)
    {
        $this->restaurantBranch = $restaurantBranch;

        return $this;
    }

    /**
     * Get restaurantBranch
     *
     * @return \GFED\GFEDBundle\Entity\RestaurantBranch
     */
    public function getRestaurantBranch()
    {
        return $this->restaurantBranch;
    }

    /**
     * Set user
     *
     * @param \GFED\GFEDBundle\Entity\User $user
     *
     * @return RestaurantReview
     */
    public function setUser(\GFED\GFEDBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \GFED\GFEDBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
