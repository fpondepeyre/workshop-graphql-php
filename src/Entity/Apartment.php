<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apartment.
 *
 * @ORM\Table(name="apartment")
 * @ORM\Entity()
 */
class Apartment
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
     * @var string
     *
     * @ORM\Column(name="streetaddress", type="string", length=255)
     */
    private $streetaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=255)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var int
     *
     * @ORM\Column(name="buildyear", type="integer")
     */
    private $buildyear;

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $streetAddress
     *
     * @return Apartment
     */
    public function setStreetaddress(string $streetAddress): self
    {
        $this->streetaddress = $streetAddress;

        return $this;
    }

    /**
     * Get streetaddress.
     *
     * @return string
     */
    public function getStreetaddress(): string
    {
        return $this->streetaddress;
    }

    /**
     * @param string $city
     *
     * @return Apartment
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $zipcode
     *
     * @return Apartment
     */
    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @param string $country
     *
     * @return Apartment
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param int $buildYear
     *
     * @return Apartment
     */
    public function setBuildyear(int $buildYear): self
    {
        $this->buildyear = $buildYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getBuildyear(): int
    {
        return $this->buildyear;
    }

    /**
     * @param int $size
     *
     * @return Apartment
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}
