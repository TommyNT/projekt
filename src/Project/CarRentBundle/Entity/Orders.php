<?php

namespace Project\CarRentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $carId;

     /**
      * @ORM\ManyToOne(targetEntity="Users", inversedBy="orders")
      * @ORM\JoinColumn(name="users_id", referencedColumnName="id")
      */
    protected $username;

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
     * Set userId
     *
     * @param integer $userId
     * @return Orders
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set carId
     *
     * @param integer $carId
     * @return Orders
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;

        return $this;
    }

    /**
     * Get carId
     *
     * @return integer 
     */
    public function getCarId()
    {
        return $this->carId;
    }
}
