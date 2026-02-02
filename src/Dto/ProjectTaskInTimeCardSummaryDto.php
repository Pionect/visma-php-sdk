<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project task &gt; The project task that the employee worked on.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInTimeCardSummaryDtoFactory testFactory()
 */
class ProjectTaskInTimeCardSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
