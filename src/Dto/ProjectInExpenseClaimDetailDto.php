<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Project &gt; The project or customer contract associated with the expense claim, if
 * the work performed was for a project or contract. Project Task The task associated with the contract
 * or project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInExpenseClaimDetailDtoFactory factory()
 */
class ProjectInExpenseClaimDetailDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
