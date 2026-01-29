<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

class SupplierInvoiceUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $documentType;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $referenceNumber;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    #[DateTime]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $date;

    #[Property]
    #[DateTime]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $origInvoiceDate;

    #[Property]
    public ?postPeriodInSupplierInvoiceUpdateDto $postPeriod;

    #[Property]
    public ?financialPeriodInSupplierInvoiceUpdateDto $financialPeriod;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $supplierReference;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $supplierNumber;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $locationId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $currencyId;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $paymentRefNo;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $creditTermsId;

    #[Property]
    #[DateTime]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $dueDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $cashDiscountDate;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $exchangeRate;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $branchNumber;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $roundingDiffInCurrency;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $taxCalculationMode;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $supplierTaxZone;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $cashAccount;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $paymentMethod;

    #[Property]
    #[DateTime]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $payDate;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $amount;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?float $vatAmount;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $paymentMessage;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $applyRetainage;

    #[Property]
    public ?array $taxDetailLines;

    #[Property]
    public ?array $invoiceLines;

    #[Property]
    public ?ApprovalDetailsUpdateDto $approvalDetails;

    #[Property]
    public ?array $addPoreceiptLines;

    #[Property]
    public ?array $addPurchaseOrders;

    #[Property]
    public ?array $landedCosts;

    #[Property]
    public ?paySelectedInSupplierInvoiceUpdateDto $paySelected;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?bool $overrideNumberSeries;

    #[Property]
    public ?validateLineDetailsInSupplierInvoiceUpdateDto $validateLineDetails;
}
