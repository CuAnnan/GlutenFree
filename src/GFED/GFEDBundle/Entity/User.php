<?php
// src/AppBundle/Entity/User.php
namespace GFED\GFEDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 */
class User extends BaseUser implements UserInterface, \Serializable
{
	/**
     * @ORM\Column(type="integer", length=190)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
	 * @ORM\OneToMany(targetEntity="Restaurant", mappedBy="user")
	 */
	protected $restaurants;
	
	/**
	 * @ORM\OneToMany(targetEntity="RestaurantBranch", mappedBy="user")
	 */
	protected $restaurantBranches;
	
	/**
	 * @ORM\OneToMany(targetEntity="RestaurantReview", mappedBy="user")
	 */
	protected $reviews;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;

    public function __construct()
    {
		parent::__construct();
        $this->isActive = true;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }

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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add restaurant
     *
     * @param \GFED\GFEDBundle\Entity\Restaurant $restaurant
     *
     * @return User
     */
    public function addRestaurant(\GFED\GFEDBundle\Entity\Restaurant $restaurant)
    {
        $this->restaurants[] = $restaurant;

        return $this;
    }

    /**
     * Remove restaurant
     *
     * @param \GFED\GFEDBundle\Entity\Restaurant $restaurant
     */
    public function removeRestaurant(\GFED\GFEDBundle\Entity\Restaurant $restaurant)
    {
        $this->restaurants->removeElement($restaurant);
    }

    /**
     * Get restaurants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRestaurants()
    {
        return $this->restaurants;
    }

    /**
     * Add restaurantBranch
     *
     * @param \GFED\GFEDBundle\Entity\RestaurantBranch $restaurantBranch
     *
     * @return User
     */
    public function addRestaurantBranch(\GFED\GFEDBundle\Entity\RestaurantBranch $restaurantBranch)
    {
        $this->restaurantBranches[] = $restaurantBranch;

        return $this;
    }

    /**
     * Remove restaurantBranch
     *
     * @param \GFED\GFEDBundle\Entity\RestaurantBranch $restaurantBranch
     */
    public function removeRestaurantBranch(\GFED\GFEDBundle\Entity\RestaurantBranch $restaurantBranch)
    {
        $this->restaurantBranches->removeElement($restaurantBranch);
    }

    /**
     * Get restaurantBranches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRestaurantBranches()
    {
        return $this->restaurantBranches;
    }

    /**
     * Add review
     *
     * @param \GFED\GFEDBundle\Entity\RestaurantReviews $review
     *
     * @return User
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
