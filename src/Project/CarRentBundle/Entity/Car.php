<?php

namespace Project\CarRentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 */
class Car
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $equipment;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $fuel;

    /**
     * @var string
     */
    private $box;

    /**
     * @var int
     */
    private $price;


    /**
     * @ManyToMany(targetEntity="Orders")
     * @JoinTable(name="car_orders",
     *      joinColumns={@JoinColumn(name="id", referencedColumnName="car_id")},
     *      inverseJoinColumns={@JoinColumn(name="orders_id", referencedColumnName="id")}
     *      )
     */
    private $orders;

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
     * Set brand
     *
     * @param string $brand
     * @return Car
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set equipment
     *
     * @param string $equipment
     * @return Car
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Get equipment
     *
     * @return string 
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Car
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set fuel
     *
     * @param string $fuel
     * @return Car
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get fuel
     *
     * @return string 
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set box
     *
     * @param string $box
     * @return Car
     */
    public function setBox($box)
    {
        $this->box = $box;

        return $this;
    }

    /**
     * Get box
     *
     * @return string 
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
