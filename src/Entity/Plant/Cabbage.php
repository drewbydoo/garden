<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Cabbage
 * @package App\Entity\Plant
 */
class Cabbage extends AbstractPlant
{
    /**
     * Cabbage constructor.
     */
    public function __construct()
    {
        $this->name = 'Cabbage';
        $this->days_to_harvest = 70;
        $this->frost_hardy = true;
        $this->direct_sow = false;
        $this->ground_temperature = 50;
        $this->start_date = -70;
        $this->column_spacing = 12;
        $this->row_spacing = 18;
    }
}
