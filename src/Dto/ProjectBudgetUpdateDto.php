<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectBudgetUpdateDtoFactory testFactory()
 */
class ProjectBudgetUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ProjectBudgetUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('projectID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectId = null,
        #[MapName('projectTaskID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTaskId = null,
        #[MapName('accountGroupID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountGroupId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $rate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $originalBudgetQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $originalBudgetAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $revisedBudgetQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $revisedBudgetAmount = null,
    ) {}
}
