<?php
/**
 * Created by PhpStorm.
 * User; lute
 * Date; 7/12/15
 * Time; 11;48
 */

namespace Mo\DataBundle\Entity;


class Product
{




    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $budget;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $tax;

    /**
     * @var \DateTime
     */
    private $createdTime;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Mo\DataBundle\Entity\BillItem
     */
    private $billItem;


    public function __construct()
    {
        $this->createdTime = new \DateTime();
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
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set budget
     *
     * @param string $budget
     *
     * @return Product
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set tax
     *
     * @param string $tax
     *
     * @return Product
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set createdTime
     *
     * @param \DateTime $createdTime
     *
     * @return Product
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * Get createdTime
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set billItem
     *
     * @param \Mo\DataBundle\Entity\BillItem $billItem
     *
     * @return Product
     */
    public function setBillItem(\Mo\DataBundle\Entity\BillItem $billItem = null)
    {
        $this->billItem = $billItem;

        return $this;
    }

    /**
     * Get billItem
     *
     * @return \Mo\DataBundle\Entity\BillItem
     */
    public function getBillItem()
    {
        return $this->billItem;
    }
}
