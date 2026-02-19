<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceUpdateDtoFactory testFactory()
 */
class SupplierInvoiceUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum $documentType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $referenceNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $origInvoiceDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $financialPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currencyId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentRefNo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $creditTermsId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $dueDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $cashDiscountDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $exchangeRate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $roundingDiffInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?EntryTypeTaxCalculationModeEnum $taxCalculationMode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierTaxZone = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $payDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $vatAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMessage = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $applyRetainage = null,
        /** @var TaxDetailUpdateDto[]|null */
        public ?array $taxDetailLines = null,
        /** @var SupplierInvoiceLineUpdateDto[]|null */
        public ?array $invoiceLines = null,
        public ?ApprovalDetailsUpdateDto $approvalDetails = null,
        /** @var AddPoreceiptLineDto[]|null */
        #[MapName('addPOReceiptLines')]
        public ?array $addPoreceiptLines = null,
        /** @var AddPurchaseOrderDto[]|null */
        public ?array $addPurchaseOrders = null,
        /** @var SupplierInvoiceLandedCostUpdateDto[]|null */
        public ?array $landedCosts = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $paySelected = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $validateLineDetails = null,
    ) {}
}
