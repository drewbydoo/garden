<?php

namespace App\Entity\Plant;

use App\Entity\AbstractPlant;

/**
 * Class Celery
 * @package App\Entity\Plant
 */
class Celery extends AbstractPlant
{
    /**
     * Celery constructor.
     */
    public function __construct()
    {
        $this->name = 'Celery';
        $this->days_to_harvest = 95;
        $this->frost_hardy = true;
        $this->direct_sow = true;
        $this->ground_temperature = 50;
        $this->start_date = -56;
        $this->column_spacing = 3;
        $this->row_spacing = 8;
    }
}
