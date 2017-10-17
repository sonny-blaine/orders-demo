<?php

namespace App\Entity;

use App\Entity\Order\Item;
use App\Entity\Order\Status;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Order
 * @package App\Entity
 *
 * @ORM\Entity()
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    public $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer")
     * @var Customer
     */
    public $customer;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Order\Item", mappedBy="order")
     *
     * @var Item[]
     */
    public $items;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Address")
     *
     * @var Address
     */
    public $address;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PaymentType")
     *
     * @var PaymentType
     */
    public $paymentType;

    /**
     * @ORM\Column(name="value", type="decimal", precision=2)
     *
     * @var float
     */
    public $value;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Order\Status")
     *
     * @var Status
     */
    public $status;
}