<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Project &gt; The project or customer contract associated with the expense claim, if
 * the work performed was for a project or contract. Project Task The task associated with the contract
 * or project.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInExpenseClaimDetailDtoFactory testFactory()
 */
class ProjectInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
