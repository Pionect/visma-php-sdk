<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Purchase Order in Purchase Order Controller. Used to pass data to server for
 * creating or updating an order
 * Supplier is mandatory to create Purchase Order, customer can be
 * identified by Supplier, GLN or VatRegistrationId
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderBasicUpdateDtoFactory testFactory()
 */
class PurchaseOrderBasicUpdateDto extends Model
{
    public function __construct(
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
        public ?SupplierInPurchaseOrderBasicUpdateDto $supplier = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        public ?GlnInPurchaseOrderBasicUpdateDto $gln = null,
        public ?VatRegistrationIdInPurchaseOrderBasicUpdateDto $vatRegistrationId = null,
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
        public ?CustomStr1inPurchaseOrderBasicUpdateDto $customStr1 = null,
        public ?CustomStr2inPurchaseOrderBasicUpdateDto $customStr2 = null,
        public ?CustomStr3inPurchaseOrderBasicUpdateDto $customStr3 = null,
        public ?CustomStr4inPurchaseOrderBasicUpdateDto $customStr4 = null,
        public ?CustomStr5inPurchaseOrderBasicUpdateDto $customStr5 = null,
        public ?CustomDec1inPurchaseOrderBasicUpdateDto $customDec1 = null,
        public ?CustomDec2inPurchaseOrderBasicUpdateDto $customDec2 = null,
        public ?CustomInt1inPurchaseOrderBasicUpdateDto $customInt1 = null,
        public ?CustomInt2inPurchaseOrderBasicUpdateDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inPurchaseOrderBasicUpdateDto $customDateTimeUtc1 = null,
        public ?string $timeStamp = null,
    ) {}
}
