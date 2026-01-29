<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptController. Used for getting data.
 */
class PurchaseReceiptUpdateDto extends Model
{
    #[Property]
    public ?array $lines;

    #[Property]
    public ?array $landedCost;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $receiptType;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $receiptNbr;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $date;

    #[Property]
    public ?postPeriodInPurchaseReceiptUpdateDto $postPeriod;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $warehouseId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $supplierId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $locationId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $exchangeRate;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $createBill;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $supplierRef;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $controlQty;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $controlAmount;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
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
