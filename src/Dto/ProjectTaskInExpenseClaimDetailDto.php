<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The task associated with the contract or project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInExpenseClaimDetailDtoFactory factory()
 */
class ProjectTaskInExpenseClaimDetailDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
