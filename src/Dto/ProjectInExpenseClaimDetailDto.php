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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ProjectInExpenseClaimDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The internal identifier. */
        public ?int $internalId = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
