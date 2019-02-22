<?php

namespace App\Entity;


/**
 * Class PlantInterface
 * @package App\Entity
 */
interface PlantInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getDaysToHarvest();

    /**
     * @return bool
     */
    public function isFrostHardy();

    /**
     * @return bool
     */
    public function isDirectSow();

    /**
     * @return int
     */
    public function getGroundTemperature();

    /**
     * @return int
     */
    public function getStartDate();

    /**
     * @return int
     */
    public function getColumnSpacing();

    /**
     * @return int
     */
    public function getRowSpacing();
}
