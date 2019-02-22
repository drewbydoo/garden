<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Artichoke
 * @package App\Entity\Plant
 */
class Artichoke extends AbstractPlant
{
    /**
     * Artichoke constructor.
     */
    public function __construct()
    {
        $this->name = 'Artichoke';
        $this->days_to_harvest = 165;
        $this->frost_hardy = false;
        $this->direct_sow = false;
        $this->ground_temperature = 50;
        $this->start_date = -56;
        $this->column_spacing = 18;
        $this->row_spacing = 28;
    }
}
