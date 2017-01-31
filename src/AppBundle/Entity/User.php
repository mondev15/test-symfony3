<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $age;

    /**
     * @ORM\Column(type="string")
    */
    protected $famille;

    /**
     * @ORM\Column(type="string")
     */
    protected $race;

    /**
    * @ORM\Column(type="string")
    */
    protected $nourriture;


    
    // /**
    //*@ORM\Column(type="array")
    //*/
     //protected $friends;

    // /**
    // *@ORM\Column(type="array")
    // */
    // protected $friendsWithMe;

    public function __construct()
    {
        parent::__construct();
        // your own logic 
        //$this->friends = array();
        //$this->friendsWithMe= array();
    }

    // /**
    // *addFriend
    // *@param \AppBundle\Entity\User
    // *@return User
    // */

    // public function addFriend(\AppBundle\Entity\User $friend)
    // {
    //     $this->friends[]=$friend;
    //     return $this;
    // }


    // /**
    // *removeFriend
    // *@param \AppBundle\Entity\User
    // */
    //  public function removeFriend(\AppBundle\Entity\User $friend)
    // {
    //     $this->friends->removeElement($friend);
    // }

    // /**
    // *getFriends
    // *@return \Doctrine\Common\Collections\Collection
    // */
    //  public function getFriends()
    // {
    //     return $this->friends;    }

    
    // /**
    // *hasFriend
    // *@param \AppBundle\Entity\User
    // *@return boolean
    // */     
    // public function hasFriend(\AppBundle\Entity\User $friend)
    // {
    //      return $this->friends->contains($friend);
    // }

    // /**
    // *canAddFriend 
    // *@param \AppBundle\Entity\User
    // *@return boolean
    // */ 
    // public function canAddFriend(\AppBundle\Entity\User $friend)
    // {
    //     return ($this!= $friends) && (!$this->hasFriend($friend));
    // }


    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return User
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return User
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set nourriture
     *
     * @param string $nourriture
     *
     * @return User
     */
    public function setNourriture($nourriture)
    {
        $this->nourriture = $nourriture;

        return $this;
    }

    /**
     * Get nourriture
     *
     * @return string
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }
}
