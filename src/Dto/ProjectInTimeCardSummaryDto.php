<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Project* &gt; The project that the employee worked on.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInTimeCardSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInTimeCardSummaryDtoFactory testFactory()
 */
class ProjectInTimeCardSummaryDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
