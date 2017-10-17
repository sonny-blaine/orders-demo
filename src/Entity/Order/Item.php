<?php

namespace App\Entity\Order;

use App\Entity\Order;
use App\Entity\Product;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Item
 * @package App\Entity\Order
 *
 * @ORM\Entity()
 */
class Item
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Order", inversedBy="items")
     *
     * @var Order
     */
    public $order;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product")
     *
     * @var Product
     */
    public $product;

    /**
     * @ORM\Column(name="quantity", type="integer")
     *
     * @var int
     */
    public $quantity;

    /**
     * @ORM\Column(name="value", type="float")
     *
     * @var float
     */
    public $value;
}