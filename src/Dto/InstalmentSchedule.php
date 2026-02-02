<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InstalmentScheduleFactory testFactory()
 */
class InstalmentSchedule extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $days = null,
        public int|float|null $percent = null,
    ) {}
}
