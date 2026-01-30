<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentUpdateDtoFactory factory()
 */
class ShipmentUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipmentType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $shipmentDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $owner = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fromWarehouse = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $toWarehouse = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlQuantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $businessName = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $attention = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $phone1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $email = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $addressLine1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $addressLine2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $addressLine3 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $city = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $country = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $county = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postalCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipVia = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fobPoint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shippingTerms = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shippingZone = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $residentialDelivery = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $saturdayDelivery = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $useCustomerAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $insurance = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $freightAmt = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $freightCost = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $transactionType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $modeOfTrasport = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $container = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        public ?array $shipmentDetailLines = null,
        public ?array $shipmentPackageLines = null,
        public ?CustomStr1inShipmentUpdateDto $customStr1 = null,
        public ?CustomStr2inShipmentUpdateDto $customStr2 = null,
        public ?CustomStr3inShipmentUpdateDto $customStr3 = null,
        public ?CustomStr4inShipmentUpdateDto $customStr4 = null,
        public ?CustomStr5inShipmentUpdateDto $customStr5 = null,
        public ?CustomDec1inShipmentUpdateDto $customDec1 = null,
        public ?CustomDec2inShipmentUpdateDto $customDec2 = null,
        public ?CustomInt1inShipmentUpdateDto $customInt1 = null,
        public ?CustomInt2inShipmentUpdateDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inShipmentUpdateDto $customDateTimeUtc1 = null,
    ) {}
}
