<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentCreateDtoFactory testFactory()
 */
class ShipmentCreateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        /** @var ShipmentDetailLineUpdateDto[]|null */
        public ?array $shipmentDetailLines = null,
        /** @var ShipmentPackageLineUpdateDto[]|null */
        public ?array $shipmentPackageLines = null,
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
    ) {}
}
