<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Project* &gt; The project that the employee worked on.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInTimeCardSummaryDtoFactory testFactory()
 */
class ProjectInTimeCardSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
