<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InstalmentScheduleFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InstalmentScheduleFactory factory()
 */
class InstalmentSchedule extends Model
{
    public function __construct(
        public ?int $days = null,
        public int|float|null $percent = null,
    ) {}
}
