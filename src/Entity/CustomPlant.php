<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserPlantRepository")
 */
class CustomPlant implements PlantInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $type;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $start_date;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $days_to_harvest;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $frost_hardy;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $direct_sow;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $ground_temperature;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $start_date;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $column_spacing;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $row_spacing;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

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
