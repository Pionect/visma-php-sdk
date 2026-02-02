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
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
