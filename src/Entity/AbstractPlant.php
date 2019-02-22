<?php

namespace App\Entity;


/**
 * Class AbstractPlant
 * @package App\Entity\Plant
 */
class AbstractPlant
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $days_to_harvest;

    /**
     * @var bool
     */
    protected $frost_hardy;

    /**
     * @var bool
     */
    protected $direct_sow;

    /**
     * @var int
     */
    protected $ground_temperature;

    /**
     * @var int
     */
    protected $start_date;

    /**
     * @var int
     */
    protected $column_spacing;

    /**
     * @var int
     */
    protected $row_spacing;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getDaysToHarvest(): int
    {
        return $this->days_to_harvest;
    }

    /**
     * @param int $days_to_harvest
     */
    public function setDaysToHarvest(int $days_to_harvest): void
    {
        $this->days_to_harvest = $days_to_harvest;
    }

    /**
     * @return bool
     */
    public function isFrostHardy(): bool
    {
        return $this->frost_hardy;
    }

    /**
     * @param bool $frost_hardy
     */
    public function setFrostHardy(bool $frost_hardy): void
    {
        $this->frost_hardy = $frost_hardy;
    }

    /**
     * @return bool
     */
    public function isDirectSow(): bool
    {
        return $this->direct_sow;
    }

    /**
     * @param bool $direct_sow
     */
    public function setDirectSow(bool $direct_sow): void
    {
        $this->direct_sow = $direct_sow;
    }

    /**
     * @return int
     */
    public function getGroundTemperature(): int
    {
        return $this->ground_temperature;
    }

    /**
     * @param int $ground_temperature
     */
    public function setGroundTemperature(int $ground_temperature): void
    {
        $this->ground_temperature = $ground_temperature;
    }

    /**
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->start_date;
    }

    /**
     * @param int $start_date
     */
    public function setStartDate(int $start_date): void
    {
        $this->start_date = $start_date;
    }

    /**
     * @return int
     */
    public function getColumnSpacing(): int
    {
        return $this->column_spacing;
    }

    /**
     * @param int $column_spacing
     */
    public function setColumnSpacing(int $column_spacing): void
    {
        $this->column_spacing = $column_spacing;
    }

    /**
     * @return int
     */
    public function getRowSpacing(): int
    {
        return $this->row_spacing;
    }

    /**
     * @param int $row_spacing
     */
    public function setRowSpacing(int $row_spacing): void
    {
        $this->row_spacing = $row_spacing;
    }
}
