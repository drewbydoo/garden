<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Carrot
 * @package App\Entity\Plant
 */
class Carrot extends AbstractPlant
{
    /**
     * Carrot constructor.
     */
    public function __construct()
    {
        $this->name = 'Carrot';
        $this->days_to_harvest = 70;
        $this->frost_hardy = true;
        $this->direct_sow = true;
        $this->ground_temperature = 45;
        $this->start_date = -21;
        $this->column_spacing = 3;
        $this->row_spacing = 18;
    }
}
