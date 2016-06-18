<?php
namespace GFED\GFEDBundle\Entity;
/* 
 * Restaurants are being handled such that all restaurants are chains, even if they are chains with only one branch.
 */

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class RestaurantTag
{
	/**
     * @ORM\Column(type="integer", length=190)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $tagText;

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
     * Set tagText
     *
     * @param string $tagText
     *
     * @return RestaurantTag
     */
    public function setTagText($tagText)
    {
        $this->tagText = $tagText;

        return $this;
    }

    /**
     * Get tagText
     *
     * @return string
     */
    public function getTagText()
    {
        return $this->tagText;
    }
}
