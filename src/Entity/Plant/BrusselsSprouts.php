<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class BrusselsSprouts
 * @package App\Entity\Plant
 */
class BrusselsSprouts extends AbstractPlant
{
    /**
     * BrusselsSprouts constructor.
     */
    public function __construct()
    {
        $this->name = 'Brussels Sprouts';
        $this->days_to_harvest = 165;
        $this->frost_hardy = true;
        $this->direct_sow = false;
        $this->ground_temperature = 45;
        $this->start_date = -56;
        $this->column_spacing = 26;
        $this->row_spacing = 30;
    }
}
