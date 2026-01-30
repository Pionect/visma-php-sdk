<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLineUpdateDtoFactory factory()
 */
class SupplierInvoiceLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventoryNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $transactionDescription;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $quantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $uom;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $unitCostInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $costInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountPercent;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountAmountInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountUnitCostInCurrency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $manualDiscount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountNumber;

    #[Property]
    public ?array $subaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $deferralSchedule;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $deferralCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatCodeId;

    #[Property]
    public ?branchInSupplierInvoiceLineUpdateDto $branch;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $projectInternalId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $projectTaskId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $projectTaskInternalId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $splitLine;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $undoSplitLine;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $splitHierarchy;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $retainagePct;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $curyRetainageAmt;

    #[Property]
    public ?LinkLineDto $linkLine;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $termStartDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $termEndDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $externalInventoryId;

    #[Property]
    public ?prebookAccountNumberInSupplierInvoiceLineUpdateDto $prebookAccountNumber;

    /** Subaccount used for prebooking. Note that this feature is not available for all countries. */
    #[Property]
    public ?array $prebookSubaccount;
}
