<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Week &gt; The week for which the time card has been created.
 *
 * @method static \Pionect\VismaSdk\Factories\WeekInTimeCardDtoFactory testFactory()
 */
class WeekInTimeCardDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
