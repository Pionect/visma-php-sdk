<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Friday, including overtime.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FriInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FriInTimeCardSummaryUpdateDtoFactory factory()
 */
class FriInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
