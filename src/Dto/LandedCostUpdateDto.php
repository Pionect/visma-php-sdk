<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Landed Cost Line for Purchase Receipt in PurchaseReceiptController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LandedCostUpdateDtoFactory factory()
 */
class LandedCostUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $landedCostCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $purchaseInvoiceNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $locationId;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $apBillDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $amount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $taxCategory;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $terms;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inventoryId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $apDocType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $apRefNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inDocType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $inRefNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $postponePurchaseInvoiceCreation;
}
