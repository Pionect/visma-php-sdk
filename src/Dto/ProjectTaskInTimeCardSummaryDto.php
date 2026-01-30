<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The project task that the employee worked on.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInTimeCardSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInTimeCardSummaryDtoFactory testFactory()
 */
class ProjectTaskInTimeCardSummaryDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
