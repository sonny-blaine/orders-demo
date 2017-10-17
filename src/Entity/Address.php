<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Address
 * @package App\Entity
 *
 * @ORM\Entity()
 */
class Address
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     *
     * @var int
     */
    public $id;

    /**
     * @ORM\Column(name="state", type="string")
     *
     * @var string
     */
    public $state;

    /**
     * @ORM\Column(name="city", type="string")
     *
     * @var string
     */
    public $city;

    /**
     * @ORM\Column(name="street", type="string")
     *
     * @var string
     */
    public $street;

    /**
     * @ORM\Column(name="number", type="integer")
     *
     * @var int
     */
    public $number;

    /**
     * @ORM\Column(name="zip_code", type="string")
     *
     * @var string
     */
    public $zipCode;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="addresses")
     *
     * @var Customer
     */
    public $customer;

    public function __toString()
    {
        return sprintf("%s, %s, %s, %s, %s", $this->street, $this->number, $this->city, $this->state, $this->zipCode);
    }
}