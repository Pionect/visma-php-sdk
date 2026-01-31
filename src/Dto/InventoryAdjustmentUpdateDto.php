<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryAdjustmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryAdjustmentUpdateDtoFactory testFactory()
 */
class InventoryAdjustmentUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlCost = null,
        public ?array $adjustmentLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $referenceNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $externalReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlQuantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
    ) {}
}
