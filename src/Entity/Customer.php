<?php

namespace App\Entity;

use \DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 *
 * Class Customer
 * @package App\Entity
 *
 * @ORM\Entity()
 */
class Customer
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
     * @ORM\Column(name="first_name", type="string")
     *
     * @var string
     */
    public $firstName;

    /**
     * @ORM\Column(name="last_name", type="string")
     *
     * @var string
     */
    public $lastName;

    /**
     * @ORM\Column(name="birthdate", type="date")
     *
     * @var DateTime
     */
    public $birthdate;

    /**
     * @ORM\Column(name="document", type="string")
     *
     * @var string
     */
    public $document;

    /**
     * @ORM\Column(name="document_type", type="string")
     *
     * @var string
     */
    public $documentType;

    /**
     * @ORM\Column(name="phone", type="string")
     *
     * @var string
     */
    public $phone;

    /**
     * @ORM\Column(name="email", type="string")
     *
     * @var string
     */
    public $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Address", mappedBy="customer")
     *
     * @var ArrayCollection
     */
    public $addresses;

    public function __toString()
    {
        return $this->firstName . " " . $this->lastName;
    }
}