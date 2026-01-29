<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptBasicController. Used for adding data.
 */
class PurchaseReceiptBasicUpdateDto extends Model
{
    #[Property]
    public ?array $lines;

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
    public ?postPeriodInPurchaseReceiptBasicUpdateDto $postPeriod;

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
    public ?customStr1InPurchaseReceiptBasicUpdateDto $customStr1;

    #[Property]
    public ?customStr2InPurchaseReceiptBasicUpdateDto $customStr2;

    #[Property]
    public ?customStr3InPurchaseReceiptBasicUpdateDto $customStr3;

    #[Property]
    public ?customStr4InPurchaseReceiptBasicUpdateDto $customStr4;

    #[Property]
    public ?customStr5InPurchaseReceiptBasicUpdateDto $customStr5;

    #[Property]
    public ?customDec1InPurchaseReceiptBasicUpdateDto $customDec1;

    #[Property]
    public ?customDec2InPurchaseReceiptBasicUpdateDto $customDec2;

    #[Property]
    public ?customInt1InPurchaseReceiptBasicUpdateDto $customInt1;

    #[Property]
    public ?customInt2InPurchaseReceiptBasicUpdateDto $customInt2;

    #[Property]
    public ?customDateTimeUTC1InPurchaseReceiptBasicUpdateDto $customDateTimeUtc1;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
