<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Broccoli
 * @package App\Entity\Plant
 */
class Broccoli extends AbstractPlant
{
    /**
     * Broccoli constructor.
     */
    public function __construct()
    {
        $this->name = 'Broccoli';
        $this->days_to_harvest = 55;
        $this->frost_hardy = true;
        $this->direct_sow = true;
        $this->ground_temperature = 45;
        $this->start_date = -56;
        $this->column_spacing = 18;
        $this->row_spacing = 28;
    }
}
