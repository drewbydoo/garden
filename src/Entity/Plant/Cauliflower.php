<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Cauliflower
 * @package App\Entity\Plant
 */
class Cauliflower extends AbstractPlant
{
    /**
     * Cauliflower constructor.
     */
    public function __construct()
    {
        $this->name = 'Cauliflower';
        $this->days_to_harvest = 95;
        $this->frost_hardy = true;
        $this->direct_sow = true;
        $this->ground_temperature = 45;
        $this->start_date = -21;
        $this->column_spacing = 12;
        $this->row_spacing = 18;
    }
}
