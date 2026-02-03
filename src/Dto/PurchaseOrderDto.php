<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Order in PurchaseOrderController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderDtoFactory testFactory()
 */
class PurchaseOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $shippingDestinationType = null,
        public ?ShipToInPurchaseOrderDto $shipTo = null,
        public ?ShippingLocationInPurchaseOrderDto $shippingLocation = null,
        public ?WarehouseInPurchaseOrderDto $warehouse = null,
        public ?ShippingContactInPurchaseOrderDto $shippingContact = null,
        public ?ShippingAddressInPurchaseOrderDto $shippingAddress = null,
        public ?string $fobPoint = null,
        public ?string $shipVia = null,
        public ?string $shipTerms = null,
        public ?RemitContactInPurchaseOrderDto $remitContact = null,
        public ?RemitAddressInPurchaseOrderDto $remitAddress = null,
        public ?TermsInPurchaseOrderDto $terms = null,
        public ?SupplierVatZoneInPurchaseOrderDto $supplierVatZone = null,
        /** @var DiscountDetailDto[]|null */
        public ?array $discountDetails = null,
        public ?string $salesOrderType = null,
        public ?string $salesOrderNbr = null,
        public ?string $requisitionRefNbr = null,
        public ?string $paymentRefNbr = null,
        #[MapName('workgroupID')]
        public ?int $workgroupId = null,
        public ?bool $dontPrint = null,
        public ?bool $printed = null,
        public ?bool $dontEmail = null,
        public ?bool $emailed = null,
        public int|float|null $openQuantity = null,
        public int|float|null $openBalance = null,
        public ?string $orderType = null,
        public ?string $orderNbr = null,
        public ?bool $hold = null,
        public ?string $status = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $promisedOn = null,
        public ?string $description = null,
        public ?SupplierInPurchaseOrderDto $supplier = null,
        public ?LocationInPurchaseOrderDto $location = null,
        public ?OwnerInPurchaseOrderDto $owner = null,
        public ?string $currency = null,
        public ?string $supplierRef = null,
        public int|float|null $exchangeRate = null,
        public int|float|null $lineTotal = null,
        public int|float|null $lineTotalInBaseCurrency = null,
        public int|float|null $vatExemptTotal = null,
        public int|float|null $vatExemptTotalInBaseCurrency = null,
        public int|float|null $taxTotal = null,
        public int|float|null $taxTotalInBaseCurrency = null,
        public int|float|null $orderTotal = null,
        public int|float|null $orderTotalInBaseCurrency = null,
        public int|float|null $controlTotal = null,
        public int|float|null $controlTotalInBaseCurrency = null,
        public ?BranchInPurchaseOrderDto $branch = null,
        /** @var PurchaseOrderLineDto[]|null */
        public ?array $lines = null,
        /** @var TaxDetailDto[]|null */
        public ?array $taxDetails = null,
        /** @var PurchaseReceiptsDto[]|null */
        public ?array $purchaseReceipts = null,
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
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
