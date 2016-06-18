<?php
namespace GFED\GFEDBundle\Entity;
/* 
 * Restaurants are being handled such that all restaurants are chains, even if they are chains with only one branch.
 */
use Doctrine\ORM\Mapping as ORM;
/** 
 * @ORM\Entity
 */
class RestaurantBranch
{
	/**
     * @ORM\Column(type="integer", length=190)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Restaurant")
	 * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
	 */
	protected $restaurant;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $address1;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $address2;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $address3;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $town;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $county;
	
	/**
	 * @ORM\Column(type="decimal")
	 */
	protected $lat;
	
	/**
	 * @ORM\Column(type="decimal")
	 */
	protected $lng;

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
     * Set address1
     *
     * @param string $address1
     *
     * @return RestaurantBranch
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return RestaurantBranch
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param string $address3
     *
     * @return RestaurantBranch
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get address3
     *
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return RestaurantBranch
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set county
     *
     * @param string $county
     *
     * @return RestaurantBranch
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set lat
     *
     * @param string $lat
     *
     * @return RestaurantBranch
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     *
     * @return RestaurantBranch
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set user
     *
     * @param \GFED\GFEDBundle\Entity\User $user
     *
     * @return RestaurantBranch
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
     * Set restaurant
     *
     * @param \GFED\GFEDBundle\Entity\Restaurant $restaurant
     *
     * @return RestaurantBranch
     */
    public function setRestaurant(\GFED\GFEDBundle\Entity\Restaurant $restaurant = null)
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    /**
     * Get restaurant
     *
     * @return \GFED\GFEDBundle\Entity\Restaurant
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }
}
