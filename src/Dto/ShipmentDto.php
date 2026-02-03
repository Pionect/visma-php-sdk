<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Shipment in ShipmentController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentDtoFactory testFactory()
 */
class ShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $timeStamp = null,
        public ?string $shipmentNumber = null,
        public ?string $shipmentType = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?string $operation = null,
        public ?\Carbon\Carbon $shipmentDate = null,
        public ?CustomerInShipmentDto $customer = null,
        public ?LocationInShipmentDto $location = null,
        public ?FromWarehouseInShipmentDto $fromWarehouse = null,
        public ?ToWarehouseInShipmentDto $toWarehouse = null,
        public ?string $currencyId = null,
        public ?OwnerInShipmentDto $owner = null,
        public int|float|null $shippedQuantity = null,
        public int|float|null $shippedWeight = null,
        public int|float|null $shippedVolume = null,
        public ?int $packages = null,
        public int|float|null $packagesWeight = null,
        public int|float|null $packagesVolume = null,
        public int|float|null $controlQuantity = null,
        public ?DeliveryAddressInShipmentDto $deliveryAddress = null,
        public ?DeliveryContactInShipmentDto $deliveryContact = null,
        public ?ShipViaInShipmentDto $shipVia = null,
        public ?FobPointInShipmentDto $fobPoint = null,
        public ?ShippingTermsInShipmentDto $shippingTerms = null,
        public ?ShippingZoneInShipmentDto $shippingZone = null,
        public ?bool $residentialDelivery = null,
        public ?bool $saturdayDelivery = null,
        public ?bool $useCustomerAccount = null,
        public ?bool $insurance = null,
        public int|float|null $freightCost = null,
        public int|float|null $freightAmt = null,
        public ?TransactionTypeInShipmentDto $transactionType = null,
        public ?ModeOfTrasportInShipmentDto $modeOfTrasport = null,
        public ?bool $container = null,
        /** @var ShipmentDetailLineDto[]|null */
        public ?array $shipmentDetailLines = null,
        /** @var ShipmentOrderLineDto[]|null */
        public ?array $shipmentOrderLines = null,
        /** @var PackageDetailLineDto[]|null */
        public ?array $shipmentPackageLines = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $note = null,
        public ?string $customStr1 = null,
        public ?string $customStr2 = null,
        public ?string $customStr3 = null,
        public ?string $customStr4 = null,
        public ?string $customStr5 = null,
        public int|float|null $customDec1 = null,
        public int|float|null $customDec2 = null,
        public ?int $customInt1 = null,
        public ?int $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
        public ?string $errorInfo = null,
    ) {}
}
