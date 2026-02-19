<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderShippingDestinationTypeEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represent a Purchase Order in Purchase Order Controller. Used to pass data to server for
 * creating or updating an order
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderUpdateDtoFactory testFactory()
 */
class PurchaseOrderUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?PurchaseOrderShippingDestinationTypeEnum $shippingDestinationType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipTo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shippingLocation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?PurchaseOrderContactUpdateDto $shippingContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?PurchaseOrderAddressUpdateDto $shippingAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fobPoint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipVia = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipTerms = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?PurchaseOrderContactUpdateDto $remitContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?PurchaseOrderAddressUpdateDto $remitAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $terms = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierVatZone = null,
        /** @var DiscountDetailUpdateDto[]|null */
        public ?array $discountDetails = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $dontPrint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $dontEmail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?PurchaseOrderLineOrderTypeEnum $orderType = null,
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
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplier = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $gln = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatRegistrationId = null,
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
        /** @var PurchaseOrderLineUpdateDto[]|null */
        public ?array $lines = null,
        public ?bool $changeDatesOnLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr3 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr4 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr5 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $customDec1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $customDec2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $customInt1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $customInt2 = null,
        #[MapName('customDateTimeUTC1'), WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
        public ?string $timeStamp = null,
    ) {}
}
