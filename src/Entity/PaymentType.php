<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PaymentType
 * @package App\Entity
 *
 * @ORM\Entity()
 */
class PaymentType
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