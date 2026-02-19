<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Project task &gt; The task associated with the contract or project.
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInExpenseClaimDetailDtoFactory testFactory()
 */
class ProjectTaskInExpenseClaimDetailDto extends SpatieData
{
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
