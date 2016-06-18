<?php
namespace GFED\GFEDBundle\Entity;
/* 
 * Restaurants are being handled such that all restaurants are chains, even if they are chains with only one branch.
 */

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 */
class Restaurant
{
	/**
     * @ORM\Column(type="integer", length=190)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
	 */
	protected $user;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $name;
	
	/**
	 * @ORM\OneToMany(targetEntity="RestaurantBranch", mappedBy="restaurant")
	 */
	protected $branches;
	
	/**
	 * @ORM\OneToMany(targetEntity="RestaurantReview", mappedBy="restaurant")
	 */
	protected $reviews;

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
     * Set name
     *
     * @param string $name
     *
     * @return Restaurant
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set user
     *
     * @param \GFED\GFEDBundle\Entity\User $user
     *
     * @return Restaurant
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->branches = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add branch
     *
     * @param \GFED\GFEDBundle\Entity\RestaurantBranch $branch
     *
     * @return Restaurant
     */
    public function addBranch(\GFED\GFEDBundle\Entity\RestaurantBranch $branch)
    {
        $this->branches[] = $branch;

        return $this;
    }

    /**
     * Remove branch
     *
     * @param \GFED\GFEDBundle\Entity\RestaurantBranch $branch
     */
    public function removeBranch(\GFED\GFEDBundle\Entity\RestaurantBranch $branch)
    {
        $this->branches->removeElement($branch);
    }

    /**
     * Get branches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBranches()
    {
        return $this->branches;
    }

    /**
     * Add review
     *
     * @param \GFED\GFEDBundle\Entity\RestaurantReviews $review
     *
     * @return Restaurant
     */
    public function addReview(\GFED\GFEDBundle\Entity\RestaurantReviews $review)
    {
        $this->reviews[] = $review;

        return $this;
    }

    /**
     * Remove review
     *
     * @param \GFED\GFEDBundle\Entity\RestaurantReviews $review
     */
    public function removeReview(\GFED\GFEDBundle\Entity\RestaurantReviews $review)
    {
        $this->reviews->removeElement($review);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviews()
    {
        return $this->reviews;
    }
}
