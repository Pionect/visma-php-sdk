<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory
 *
 * @method static \Pionect\VismaSdk\Factories\SaleOrderUpdateDtoInReopenSalesOrderActionDtoFactory testFactory()
 */
class SaleOrderUpdateDtoInReopenSalesOrderActionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $project = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $printDescriptionOnInvoice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $printNoteOnExternalDocuments = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $printNoteOnInternalDocuments = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesOrderContactUpdateDto $soBillingContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesOrderAddressUpdateDto $soBillingAddress = null,
        #[MapName('customerVATZone'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerVatzone = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $invoiceSeparately = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $terms = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesPerson = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $owner = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $origOrderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $origOrderNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesOrderContactUpdateDto $soShippingContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesOrderAddressUpdateDto $soShippingAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $schedShipment = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $shipSeparately = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipComplete = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $cancelBy = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $canceled = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $preferredWarehouse = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shipVia = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $fobPoint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $priority = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shippingTerms = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $shippingZone = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $residentialDelivery = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $saturdayDelivery = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $insurance = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $transactionType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $isRotRutDeductible = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $emailed = null,
        public ?RotRutUpdateDto $rotRutDetails = null,
        public ?array $lines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $requestOn = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerOrder = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerRefNo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $contactId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $gln = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatRegistrationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $recalculateShipment = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
    ) {}
}
