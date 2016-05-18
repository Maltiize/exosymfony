<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressBook
 *
 * @ORM\Table(name="address_book")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressBookRepository")
 */
class AddressBook
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    /**
     * @var ArrayCollection $address
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Address", mappedBy="addressBook", cascade={"persist", "remove", "merge"})
     */

    private $address;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", cascade={"persist"})
     */
    private $useraddress;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * Set name
     *
     * @return AddressBook
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Get Address
     *
     * @return ArrayCollection
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param Address $addr
     */
    public function addAddress(Address $addr) {
        $addr->setAddressBook($this);

        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->address->contains($addr)) {
            $this->address->add($addr);
        }
    }
    public function __construct()
    {
        $this->address = new ArrayCollection();
        $this->useraddress = new ArrayCollection();

    }
    /**
     * Set setUser
     *
     * @param User $usr
     *
     * @return User
     */
    public function setUser(User $usr)
    {
        $this->user = $usr;

        return $this;
    }
    /**
     * Get User
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
    public function addUser(User $user)
    {
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->useraddress->contains($user)) {
            $this->useraddress->add($user);
        }
        return $this;
    }

    public function removeUserAddress(User $user)
    {
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->useraddress->contains($user)) {
            $this->useraddress->removeElement($user);
        }
        return $this;
    }

    public function getUserAddress()
    {
        return $this->useraddress;
    }


}

