<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Sales Order Line in Sales Order Controller. Used to pass data to server for
 * creating or updating an order line
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderLineUpdateDtoFactory testFactory()
 */
class SalesOrderLineUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $invoiceNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesOrderOperation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $freeItem = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $requestedOn = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $shipOn = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipComplete = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $undershipThreshold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $overshipThreshold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $completed = null,
        #[MapName('markForPO'), WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $markForPo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $poSource = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lotSerialNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $expirationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $reasonCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesPerson = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCategory = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $commissionable = null,
        #[MapName('alternateID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $alternateId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTask = null,
        public ?array $subaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $externalLink = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $isRotRutDeductible = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $warehouse = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $unitCost = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $unitPrice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountPercent = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $discountCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $manualDiscount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discUnitPrice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lineDescription = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
    ) {}
}
