<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The project task that the employee worked on.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInTimeCardSummaryUpdateDtoFactory factory()
 */
class ProjectTaskInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
