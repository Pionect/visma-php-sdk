<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Purchase Order in Purchase Order Controller. Used to pass data to server for
 * creating or updating an order
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderUpdateDtoFactory factory()
 */
class PurchaseOrderUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shippingDestinationType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shipTo;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shippingLocation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?PurchaseOrderContactUpdateDto $shippingContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?PurchaseOrderAddressUpdateDto $shippingAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $fobPoint;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shipVia;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $shipTerms;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?PurchaseOrderContactUpdateDto $remitContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?PurchaseOrderAddressUpdateDto $remitAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $terms;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierVatZone;

    #[Property]
    public ?array $discountDetails;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $dontPrint;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $dontEmail;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $orderType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $orderNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $date;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $promisedOn;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    public ?supplierInPurchaseOrderUpdateDto $supplier;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $location;

    #[Property]
    public ?glnInPurchaseOrderUpdateDto $gln;

    #[Property]
    public ?vatRegistrationIdInPurchaseOrderUpdateDto $vatRegistrationId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $owner;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $exchangeRate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $supplierRef;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $controlTotal;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branch;

    #[Property]
    public ?array $lines;

    #[Property]
    public ?bool $changeDatesOnLines;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $overrideNumberSeries;

    #[Property]
    public ?customStr1InPurchaseOrderUpdateDto $customStr1;

    #[Property]
    public ?customStr2InPurchaseOrderUpdateDto $customStr2;

    #[Property]
    public ?customStr3InPurchaseOrderUpdateDto $customStr3;

    #[Property]
    public ?customStr4InPurchaseOrderUpdateDto $customStr4;

    #[Property]
    public ?customStr5InPurchaseOrderUpdateDto $customStr5;

    #[Property]
    public ?customDec1InPurchaseOrderUpdateDto $customDec1;

    #[Property]
    public ?customDec2InPurchaseOrderUpdateDto $customDec2;

    #[Property]
    public ?customInt1InPurchaseOrderUpdateDto $customInt1;

    #[Property]
    public ?customInt2InPurchaseOrderUpdateDto $customInt2;

    #[Property]
    public ?customDateTimeUTC1InPurchaseOrderUpdateDto $customDateTimeUtc1;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
