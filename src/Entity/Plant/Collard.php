<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Collard
 * @package App\Entity\Plant
 */
class Collard extends AbstractPlant
{
    /**
     * Collard constructor.
     */
    public function __construct()
    {
        $this->name = 'Collard';
        $this->days_to_harvest = 70;
        $this->frost_hardy = true;
        $this->direct_sow = true;
        $this->ground_temperature = 40;
        $this->start_date = -63;
        $this->column_spacing = 16;
        $this->row_spacing = 24;
    }
}
