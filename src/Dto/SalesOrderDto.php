<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a SOOrder in SOOrderController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderDtoFactory factory()
 */
class SalesOrderDto extends Model
{
    public function __construct(
        #[MapName('projectCD')]
        public ?string $projectCd = null,
        public ?bool $printDescriptionOnInvoice = null,
        public ?bool $printNoteOnExternalDocuments = null,
        public ?bool $printNoteOnInternalDocuments = null,
        public ?SoBillingContactInSalesOrderDto $soBillingContact = null,
        public ?SoBillingAddressInSalesOrderDto $soBillingAddress = null,
        #[MapName('customerVATZone')]
        public ?CustomerVatzoneInSalesOrderDto $customerVatzone = null,
        public ?bool $invoiceSeparately = null,
        public ?string $invoiceNbr = null,
        public ?\Carbon\Carbon $invoiceDate = null,
        public ?TermsInSalesOrderDto $terms = null,
        public ?\Carbon\Carbon $dueDate = null,
        public ?\Carbon\Carbon $cashDiscountDate = null,
        public ?string $postPeriod = null,
        public ?SalesPersonInSalesOrderDto $salesPerson = null,
        public ?string $commissionPercent = null,
        public ?string $commissionAmount = null,
        public ?string $commissionableAmount = null,
        public ?OwnerInSalesOrderDto $owner = null,
        public ?string $origOrderType = null,
        public ?string $origOrderNbr = null,
        public ?SoShippingContactInSalesOrderDto $soShippingContact = null,
        public ?SoShippingAddressInSalesOrderDto $soShippingAddress = null,
        public ?\Carbon\Carbon $schedShipment = null,
        public ?bool $shipSeparately = null,
        public ?string $shipComplete = null,
        public ?\Carbon\Carbon $cancelBy = null,
        public ?bool $canceled = null,
        public ?PreferredWarehouseInSalesOrderDto $preferredWarehouse = null,
        public ?ShipViaInSalesOrderDto $shipVia = null,
        public ?FobPointInSalesOrderDto $fobPoint = null,
        public ?int $priority = null,
        public ?ShippingTermsInSalesOrderDto $shippingTerms = null,
        public ?ShippingZoneInSalesOrderDto $shippingZone = null,
        public ?bool $residentialDelivery = null,
        public ?bool $saturdayDelivery = null,
        public ?bool $insurance = null,
        public ?TransactionTypeInSalesOrderDto $transactionType = null,
        public ?PaymentMethodInSalesOrderDto $paymentMethod = null,
        public ?string $cashAccount = null,
        public ?string $paymentRef = null,
        public ?bool $isRotRutDeductible = null,
        public ?bool $emailed = null,
        public ?array $lines = null,
        public ?array $shipments = null,
        public ?string $orderType = null,
        public ?string $orderNo = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $requestOn = null,
        public ?string $customerOrder = null,
        public ?string $customerRefNo = null,
        public ?CustomerInSalesOrderDto $customer = null,
        public ?int $contactId = null,
        public ?LocationInSalesOrderDto $location = null,
        public ?string $currency = null,
        public ?string $description = null,
        public int|float|null $orderTotal = null,
        public int|float|null $orderTotalInBaseCurrency = null,
        public int|float|null $vatTaxableTotal = null,
        public int|float|null $vatTaxableTotalInBaseCurrency = null,
        public int|float|null $vatExemptTotal = null,
        public int|float|null $vatExemptTotalInBaseCurrency = null,
        public int|float|null $taxTotal = null,
        public int|float|null $taxTotalInBaseCurrency = null,
        public int|float|null $exchangeRate = null,
        public int|float|null $discountTotal = null,
        public int|float|null $discountTotalInBaseCurrency = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInSalesOrderDto $branchNumber = null,
        public ?string $note = null,
        public ?array $attachments = null,
        public ?string $errorInfo = null,
    ) {}
}
