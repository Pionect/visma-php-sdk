<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InstalmentSchedule extends Model
{
    #[Property]
    public ?int $days;

    #[Property]
    public ?float $percent;
}
