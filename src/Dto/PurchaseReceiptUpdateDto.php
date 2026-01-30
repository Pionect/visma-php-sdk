<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptUpdateDtoFactory factory()
 */
class PurchaseReceiptUpdateDto extends Model
{
    #[Property]
    public ?array $lines;

    #[Property]
    public ?array $landedCost;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $receiptType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $receiptNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $date;

    #[Property]
    public ?postPeriodInPurchaseReceiptUpdateDto $postPeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $warehouseId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $locationId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $exchangeRate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $createBill;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierRef;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $controlQty;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $controlAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;

    #[Property]
    public ?customStr1InPurchaseReceiptUpdateDto $customStr1;

    #[Property]
    public ?customStr2InPurchaseReceiptUpdateDto $customStr2;

    #[Property]
    public ?customStr3InPurchaseReceiptUpdateDto $customStr3;

    #[Property]
    public ?customStr4InPurchaseReceiptUpdateDto $customStr4;

    #[Property]
    public ?customStr5InPurchaseReceiptUpdateDto $customStr5;

    #[Property]
    public ?customDec1InPurchaseReceiptUpdateDto $customDec1;

    #[Property]
    public ?customDec2InPurchaseReceiptUpdateDto $customDec2;

    #[Property]
    public ?customInt1InPurchaseReceiptUpdateDto $customInt1;

    #[Property]
    public ?customInt2InPurchaseReceiptUpdateDto $customInt2;

    #[Property]
    public ?customDateTimeUTC1InPurchaseReceiptUpdateDto $customDateTimeUtc1;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
