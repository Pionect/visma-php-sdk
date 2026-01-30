<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryTransferUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryTransferUpdateDtoFactory testFactory()
 */
class InventoryTransferUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $warehouseId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $toWarehouseId = null,
        public ?array $transferLines = null,
        public ?ReferenceNumberInInventoryTransferUpdateDto $referenceNumber = null,
        public ?HoldInInventoryTransferUpdateDto $hold = null,
        public ?DateInInventoryTransferUpdateDto $date = null,
        public ?PostPeriodInInventoryTransferUpdateDto $postPeriod = null,
        public ?ExternalReferenceInInventoryTransferUpdateDto $externalReference = null,
        public ?DescriptionInInventoryTransferUpdateDto $description = null,
        public ?ControlQuantityInInventoryTransferUpdateDto $controlQuantity = null,
        public ?BranchNumberInInventoryTransferUpdateDto $branchNumber = null,
    ) {}
}
