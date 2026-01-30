<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Week &gt; The week for which the time card has been created.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WeekInTimeCardDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WeekInTimeCardDtoFactory factory()
 */
class WeekInTimeCardDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
