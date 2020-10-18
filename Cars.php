<?php

/**
 * Class Cars
 * Le nombre de roues ;
 * La vitesse courante ;
 * La couleur ;
 * Le nombre de sièges ;
 * Le type d’énergie ;
 * Le niveau de carburant/énergie actuel.
 */

class Cars
{
    /**
     * @var integer
     */
    private $nbWheels = 4;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats = 2;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energyLevel)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyLevel = $energyLevel;
    }

    public function forward()
    {
        $this->currentSpeed = 100;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        $this->currentSpeed = 0;

        return "Let's Go !";
    }


    /**
     * @return string
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param string $nbWheels
     */
    public function setNbWheels(int $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return string
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param integer $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed) : void
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @return integer
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param integer $nbSeats
     */
    public function setNbSeats(int $nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }

    /**
     * @return string
     */
    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    /**
     * @param string $energyLevel
     */
    public function setEnergyLevel(string $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }

}
