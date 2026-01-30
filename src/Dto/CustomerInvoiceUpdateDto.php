<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInvoiceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInvoiceUpdateDtoFactory factory()
 */
class CustomerInvoiceUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentMethodId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $creditTermsId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currencyId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerRefNumber;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $cashDiscountDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $documentDueDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $externalReference;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerProject;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $exchangeRate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $domesticServicesDeductibleDocument;

    #[Property]
    public ?RotRutUpdateDto $rotRutDetails;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentReference;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $contact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $project;

    #[Property]
    public ?array $taxDetailLines;

    #[Property]
    public ?array $invoiceLines;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $sendToAutoInvoice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerVatZoneId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SalesInvoiceAddressUpdateDto $billingAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SalesInvoiceContactUpdateDto $invoiceContact;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $startDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $endDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountingCostRef;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $originatorDocRef;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $contractDocRef;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $revoked;

    #[Property]
    public ?overrideNumberSeriesInCustomerInvoiceUpdateDto $overrideNumberSeries;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $directDebitMandateId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $excludeDebtCollection;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $debtCollectionCaseNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $debtCollectionCaseStatus;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $debtCollectionCaseType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $debtCollectionCaseUrl;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $referenceNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $childCustomerNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $consolidateInvoices;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $documentDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $origInvoiceDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $hold;

    #[Property]
    public ?postPeriodInCustomerInvoiceUpdateDto $postPeriod;

    #[Property]
    public ?financialPeriodInCustomerInvoiceUpdateDto $financialPeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $invoiceText;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $locationId;

    #[Property]
    public ?salesPersonIDInCustomerInvoiceUpdateDto $salesPersonId;

    #[Property]
    public ?salespersonInCustomerInvoiceUpdateDto $salesperson;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $branchNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $cashAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $dontPrint;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $dontEmail;
}
