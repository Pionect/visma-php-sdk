<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerCreditNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerCreditNoteUpdateDtoFactory factory()
 */
class CustomerCreditNoteUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currencyId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerRefNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $externalReference;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $contact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $project;

    #[Property]
    public ?array $lines;

    #[Property]
    public ?array $taxDetails;

    #[Property]
    public ?array $applicationLines;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerVatZoneId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SalesInvoiceAddressUpdateDto $invoiceAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SalesInvoiceContactUpdateDto $invoiceContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $overrideNumberSeries;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $sendToAutoInvoice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $exchangeRate;

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
    public ?postPeriodInCustomerCreditNoteUpdateDto $postPeriod;

    #[Property]
    public ?financialPeriodInCustomerCreditNoteUpdateDto $financialPeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $invoiceText;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $locationId;

    #[Property]
    public ?salesPersonIDInCustomerCreditNoteUpdateDto $salesPersonId;

    #[Property]
    public ?salespersonInCustomerCreditNoteUpdateDto $salesperson;

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
