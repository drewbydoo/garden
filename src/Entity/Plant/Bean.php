<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Bean
 * @package App\Entity\Plant
 */
class Bean extends AbstractPlant
{
    /**
     * Bean constructor.
     */
    public function __construct()
    {
        $this->name = 'Bean';
        $this->days_to_harvest = 75;
        $this->frost_hardy = false;
        $this->direct_sow = true;
        $this->ground_temperature = 70;
        $this->start_date = 0;
        $this->column_spacing = 3;
        $this->row_spacing = 20;
    }
}
