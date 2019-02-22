<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Beet
 * @package App\Entity\Plant
 */
class Beet extends AbstractPlant
{
    /**
     * Beet constructor.
     */
    public function __construct()
    {
        $this->name = 'Beet';
        $this->days_to_harvest = 55;
        $this->frost_hardy = false;
        $this->direct_sow = true;
        $this->ground_temperature = 45;
        $this->start_date = -56;
        $this->column_spacing = 3;
        $this->row_spacing = 15;
    }
}
