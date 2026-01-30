<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditNoteUpdateDtoFactory factory()
 */
class CreditNoteUpdateDto extends Model
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
    public ?array $invoiceLines;

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
    public ?postPeriodInCreditNoteUpdateDto $postPeriod;

    #[Property]
    public ?financialPeriodInCreditNoteUpdateDto $financialPeriod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $invoiceText;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $locationId;

    #[Property]
    public ?salesPersonIDInCreditNoteUpdateDto $salesPersonId;

    #[Property]
    public ?salespersonInCreditNoteUpdateDto $salesperson;

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
