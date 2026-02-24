<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectBudgetDtoFactory testFactory()
 */
class ProjectBudgetDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ProjectBudgetDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('projectID')]
        public ?string $projectId = null,
        #[MapName('projectTaskID')]
        public ?string $projectTaskId = null,
        #[MapName('accountGroupID')]
        public ?string $accountGroupId = null,
        public ?string $inventoryNumber = null,
        public ?string $description = null,
        public ?string $uom = null,
        public int|float|null $rate = null,
        public int|float|null $originalBudgetQty = null,
        public int|float|null $originalBudgetAmount = null,
        public int|float|null $revisedBudgetQty = null,
        public int|float|null $revisedBudgetAmount = null,
        public int|float|null $actualQty = null,
        public int|float|null $actualAmount = null,
        public ?string $type = null,
        public int|float|null $committedQty = null,
        public int|float|null $committedAmount = null,
        public int|float|null $committedOpenQty = null,
        public int|float|null $committedOpenAmount = null,
        public int|float|null $committedReceivedQty = null,
        public int|float|null $committedInvoicedQty = null,
        public int|float|null $committedInvoicedAmount = null,
        public ?string $errorInfo = null,
    ) {}
}
