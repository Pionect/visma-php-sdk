<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Purchase Order in Purchase Order Controller. Used to pass data to server for
 * creating or updating an order
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderUpdateDtoFactory testFactory()
 */
class PurchaseOrderUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shippingDestinationType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipTo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shippingLocation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\PurchaseOrderContactUpdateDto $shippingContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\PurchaseOrderAddressUpdateDto $shippingAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fobPoint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipVia = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipTerms = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\PurchaseOrderContactUpdateDto $remitContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\PurchaseOrderAddressUpdateDto $remitAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $terms = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierVatZone = null,
        public ?array $discountDetails = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $dontPrint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $dontEmail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $promisedOn = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        public ?SupplierInPurchaseOrderUpdateDto $supplier = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        public ?GlnInPurchaseOrderUpdateDto $gln = null,
        public ?VatRegistrationIdInPurchaseOrderUpdateDto $vatRegistrationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $owner = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $exchangeRate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlTotal = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        public ?array $lines = null,
        public ?bool $changeDatesOnLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        public ?CustomStr1inPurchaseOrderUpdateDto $customStr1 = null,
        public ?CustomStr2inPurchaseOrderUpdateDto $customStr2 = null,
        public ?CustomStr3inPurchaseOrderUpdateDto $customStr3 = null,
        public ?CustomStr4inPurchaseOrderUpdateDto $customStr4 = null,
        public ?CustomStr5inPurchaseOrderUpdateDto $customStr5 = null,
        public ?CustomDec1inPurchaseOrderUpdateDto $customDec1 = null,
        public ?CustomDec2inPurchaseOrderUpdateDto $customDec2 = null,
        public ?CustomInt1inPurchaseOrderUpdateDto $customInt1 = null,
        public ?CustomInt2inPurchaseOrderUpdateDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inPurchaseOrderUpdateDto $customDateTimeUtc1 = null,
        public ?string $timeStamp = null,
    ) {}
}
