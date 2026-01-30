<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The project that the employee worked on.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInTimeCardSummaryUpdateDtoFactory factory()
 */
class ProjectInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
