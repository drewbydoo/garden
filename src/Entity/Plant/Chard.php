<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Chard
 * @package App\Entity\Plant
 */
class Chard extends AbstractPlant
{
    /**
     * Chard constructor.
     */
    public function __construct()
    {
        $this->name = 'Chard';
        $this->days_to_harvest = 95;
        $this->frost_hardy = true;
        $this->direct_sow = true;
        $this->ground_temperature = 50;
        $this->start_date = -56;
        $this->column_spacing = 3;
        $this->row_spacing = 8;
    }
}
