<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Corn
 * @package App\Entity\Plant
 */
class Corn extends AbstractPlant
{
    /**
     * Corn constructor.
     */
    public function __construct()
    {
        $this->name = 'Corn';
        $this->days_to_harvest = 95;
        $this->frost_hardy = false;
        $this->direct_sow = false;
        $this->ground_temperature = 70;
        $this->start_date = 7;
        $this->column_spacing = 5;
        $this->row_spacing = 30;
    }
}
