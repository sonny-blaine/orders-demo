<?php

namespace App\Entity\Order;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Status
 * @package App\Entity\Order
 *
 * @ORM\Entity()
 */
class Status
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
     * @ORM\Column(name="name", type="string")
     *
     * @var string
     */
    public $name;
}