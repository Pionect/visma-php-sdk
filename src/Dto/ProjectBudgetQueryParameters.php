<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectBudgetQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectBudgetQueryParametersFactory testFactory()
 */
class ProjectBudgetQueryParameters extends Model
{
    public function __construct(
        public ?string $project = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
